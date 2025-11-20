<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>萬年曆</h1>  

<?php
session_start();
if(!isset($_SESSION['notes']))
{
  $_SESSION['notes'] = [];
}
?>

<form action="clandar_homework.php" method="post">
  <label>新增註解</label><br>
  年:<input type="text" name="year"><br>
  月:<input type="text" name="month"><br>
  日:<input type="text" name="day"><br>
  註解:<input type="text" name="note"><br>
  <input type="submit" value="新增">
</form>

<?php
/*請在這裹撰寫你的萬年曆程式碼*/
//調整月曆年月
$nyear = $_POST['year'] ?? null;
$nmonth = $_POST['month'] ?? null;
$nday = $_POST['day'] ?? null;
$note = $_POST['note'] ?? null;

if($nyear && $nmonth && $nday && $note)
{
  $_SESSION['notes'][$nyear][$nmonth][$nday] = $note;
  echo"註解已新增至{$nyear}年{$nmonth}月{$nday}日，message:{$note}";
}
else
{
  echo "資料輸入不完整，請重新輸入";
}

$month = isset($_GET["dateM"]) ? $_GET["dateM"] : date("n");
$year = isset($_GET["dateY"]) ? $_GET["dateY"] : date("Y");

$firstweek = date("w", strtotime(date("{$year}-{$month}-1")));
$firstday = strtotime(date("{$year}-{$month}-1"));

$thismonth_days = date("t", strtotime(date("{$year}-{$month}")));
$all_days = strtotime("- $firstweek days", $firstday);
$days = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];

$prevM = date("n", strtotime("-1 month", strtotime("{$year}-{$month}-1")));
$nextM = date("n", strtotime("+1 month", strtotime("{$year}-{$month}-1")));

$prevY = date("Y", strtotime("-1 year", strtotime("{$year}-{$month}-1")));
$nextY = date("Y", strtotime("+1 year", strtotime("{$year}-{$month}-1")));
?>

<?php
echo "<div class='container'>";
for($i = 0; $i < 8; $i++)
{
  echo "<div class='calander'>";
  for($j = 0; $j < 7; $j++)
  {
    $class_day = ['boxsize'];
    $class_week = ['boxsize_week'];

    if($j == 0 || $j == 6)
    {
      $class_day[] = 'color';
      $class_week[] = 'color';
    }

    if(date('m', $all_days) < $month || date('m', $all_days) > $month)
      $class_day[] = 'text_gray';

    //第一列:年月
    if($i == 0)
    {
      echo 
      "<div class='next_prev'>
      <a href='?dateY={$prevY}&dateM={$month}'>上年&emsp;</a>
      <a href='?dateY={$nextY}&dateM={$month}'>下年</a>
      </div>

      <div class='yearmonth'>".$year."年".$month."月"."</div>

      <div class='next_prev'>
      <a href='?dateY={$year}&dateM={$prevM}'>上月&emsp;</a>
      <a href='?dateY={$year}&dateM={$nextM}'>下月</a>
      </div>";
      break;
    }
    //第二列:星期
    else if($i == 1)
    {
      echo "<div class='".implode(' ', $class_week)."'>".$days[$j]."</div>";
    }
    else
    {
      (isset($_SESSION['notes'][date('Y', $all_days)][date('n', $all_days)][date('j',$all_days)])) ? 
      $message = $_SESSION['notes'][date('Y', $all_days)][date('n', $all_days)][date('j', $all_days)] : $message = "";
      //開始印日
      echo "<div class='".implode(' ', $class_day)."'>".date('j',$all_days)."<div>{$message}</div></div>";
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