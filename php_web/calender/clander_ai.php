<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <style>
   /*請在這裹撰寫你的CSS*/ 
    *{
        font-family:"monospace";
        font-size: 25px;
        box-sizing: border-box;
    }

    .yearmonth{
        width: 125px;
        height: 60px;
        display: flex;
        justify-content: center; 
        align-items: center;
    }

    .boxsize{
        width: 90px;
        height: 120px;
        display: flex;
        justify-content: center; 
        align-items: center;
    }

    .next_prev{
        width: 190px;
        height: 120px;
        display: flex;
        justify-content: center; 
        align-items: center;
    }

    .next_prev > a{
        text-decoration: none;
        color: red;
    }

    .boxsize:hover,
    .yearmonth:hover {
        background-color: lightblue;
    }

    .boxsize:active,
    .yearmonth:active {
        background-color: royalblue;
    }

    .container{
        width:90%;
        height: 500vh;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        flex-direction: column;
    }

    .calander{
        border: 1px solid black;
        width: 700px;
        height: 140px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        margin-top: -1px;
    }

    .color{
        background-color: lightyellow;
    }

    .text_gray{
        color: lightgray;
    }
    .cell-label{
      display: block;
      font-size: 14px;
      margin-top: 6px;
      color: darkblue;
      text-align: center;
    }
  </style>
</head>
<body>
<h1>萬年曆</h1>  

<?php
/*請在這裹撰寫你的萬年曆程式碼*/  
// $month = date("m");
// $year = date("Y");
//調整月曆年月
$month = isset($_GET["dateM"]) ? $_GET["dateM"] : date("m");
$year = isset($_GET["dateY"]) ? $_GET["dateY"] : date("Y");

$firstweek = date("w", strtotime(date("{$year}-{$month}-1")));
$firstday = strtotime(date("{$year}-{$month}-1"));

$thismonth_days = date("t", strtotime(date("{$year}-{$month}")));
$all_days = strtotime("- $firstweek days", $firstday);
$days = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];

$prevM = date("m", strtotime("-1 month", strtotime("{$year}-{$month}-1")));
$nextM = date("m", strtotime("+1 month", strtotime("{$year}-{$month}-1")));

$prevY = date("Y", strtotime("-1 year", strtotime("{$year}-{$month}-1")));
$nextY = date("Y", strtotime("+1 year", strtotime("{$year}-{$month}-1")));
// 在此定義要顯示於特定格子的文字：
// 格式為 'YYYY-MM-DD' => '顯示文字'
// 範例：在 2025-11-18 顯示「會議」
$labels = [
  // '2025-11-18' => '會議',
];

?>

<?php
echo "<div class='container'>";
for($i = 0; $i < 8; $i++)
{
  echo "<div class='calander'>";
  for($j = 0; $j < 7; $j++)
  {
    //第一列:年月
    if($i == 0)
    {
      echo "
      <div class='next_prev'>
      <a href='?dateY={$prevY}&dateM{$month}'>上年&emsp;</a>
      <a href='?dateY={$nextY}&dateM{$month}'>下年</a>
      </div>

      <div class='yearmonth'>".$year."年".$month."月"."</div>

      <div class='next_prev'>
      <a href='?dateY={$year}&dateM={$prevM}'>上月&emsp;</a>
      <a href='?dateY={$year}&dateM={$nextM}'>下月</a>
      </div>
      ";
      break;
    }
    //第二列:星期
    else if($i == 1)
    {
      //六日變色
      if($j == 0 || $j == 6)
      {
        echo "<div class='boxsize color'>".$days[$j]."</div>";
      }
      else
      {
        echo "<div class='boxsize'>".$days[$j]."</div>";
      } 
    }
    else
    {
      // 開始印日（加入格子標籤支援）
      $dayNum = date('j', $all_days);
      $currentDate = date('Y-m-d', $all_days);
      $labelHtml = isset($labels[$currentDate]) ? "<div class='cell-label'>" . htmlspecialchars($labels[$currentDate]) . "</div>" : "";

      // 判斷是否為本月
      $isThisMonth = (date('m', $all_days) == sprintf('%02d', $month));
      // 判斷是否為週末
      $isWeekend = ($j == 0 || $j == 6);

      $classes = 'boxsize';
      if($isWeekend) $classes .= ' color';
      if(!$isThisMonth) $classes .= ' text_gray';

      echo "<div class='".$classes."'>".$dayNum.$labelHtml."</div>";
      

      $all_days = strtotime("+1 day", $all_days);
    }
  }
  echo "</div>";
}
echo "</table>";
echo "</div>";
  
  
?>
  
</body>
</html>