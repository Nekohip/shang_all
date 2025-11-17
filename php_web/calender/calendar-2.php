<h3>日期與時間</h3>
<h2>月曆</h2>
<style>
    table{
        border-collapse:collapse;
        width:60%;
        margin:auto;
        
    }

    td{
        border:1px solid black; 
        height: 10vh; 
        text-align:center; 
    }

    .color{
        background-color: lightyellow;
    }
    .text_gray{
        color: lightgray;
    }

    *{
        font-family:"monospace";
    }
</style>
<table>
    <?php
    // $month = date("m");
    // $year = date("Y");
    //調整月曆年月
    $month = isset($_GET['dateM']) ? $_GET['dateM'] : date('m');
    $year = isset($_GET['dateY']) ? $_GET['dateY'] : date('Y');

    // $imonth = (int)$month;

    $firstweek = date("w", strtotime(date("{$year}-{$month}-1")));
    $firstday = strtotime(date("{$year}-{$month}-1"));
    $thismonth_days = date("t", strtotime(date("{$year}-{$month}")));
    $all_days = strtotime("- $firstweek days", $firstday);

    $days = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];

    $prevM = date("m", strtotime("-1 month", strtotime("{$year}-{$month}-1")));
    $nextM = date("m", strtotime("+1 month", strtotime("{$year}-{$month}-1")));

    $prevY = date("Y", strtotime("-1 year", strtotime("{$year}-{$month}-1")));
    $nextY = date("Y", strtotime("+1 year", strtotime("{$year}-{$month}-1")));
    ?>
    <a href="?dateY=<?php echo $prevY; ?>&dateM=<?php echo $month?>">上年</a>
    <a href='?dateY=<?php echo $nextY; ?>&dateM=<?php echo $month?>'>下年</a>
    
    <a href="?dateY=<?php echo $year?>&dateM=<?php echo $prevM; ?>">上月</a>
    <a href="?dateY=<?php echo $year?>&dateM=<?php echo $nextM; ?>">下月</a>
    <?php
    for($i = 0; $i < 8; $i++)
    {
        echo "<tr>";
        for($j = 0; $j < 7; $j++)
        {
            //第一列:年月
            if($i == 0)
            {
                // colspan是合併row
                echo "<td colspan = '7'>".$year."年".$month."月</td>";
                break;
            }

            //第二列:星期
            else if($i == 1)
            {
                //六日變色
                if($j == 0 || $j == 6)
                {
                    echo "<td class='color'>".$days[$j]."</td>";
                }
                else
                {
                    echo "<td>".$days[$j]."</td>";
                } 
            }
            //印日期
            else
            {
                //非本月灰字，六日格變色
                if(date('m', $all_days) < $month || date('m', $all_days) > $month)
                {
                    if($j == 0 || $j == 6)
                    {
                        echo "<td class='color text_gray'>".date('d',$all_days)."</td>";
                    }
                    else
                    {
                        echo "<td class='text_gray'>".date('d',$all_days)."</td>";
                    }
  
                }
                else
                {
                    if($j == 0 || $j == 6)
                    {
                        echo "<td class='color'>".date('d',$all_days)."</td>";
                    }
                    //本月日
                    else
                    {
                        echo "<td>".date('d',$all_days)."</td>";
                    }
                }
                $all_days = strtotime("+1 day", $all_days);
            }
        }
        echo "</tr>";
    }
    ?>
</table>