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

    *{
        font-family:"monospace";
    }
</style>
<table>
    <?php
    // $month = date("m");
    // $year = date("Y");
    //調整月曆年月
    $month = 11;
    $year = 2025;
    $firstday = date("N", strtotime(date("{$year}-{$month}-1")));
    echo "本月第一天是星期".$firstday;

    $days = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
    //計日器
    $days_count = 1;
    $thismonth_days;

    //判斷閏年
    $leap = 0;
    if(($year % 4 == 0 && $year % 100 != 0) 
       || ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0))
    {
        $leap = 1;
    }

    //判斷該月天數
    if($month == 4 || $month == 6 || $month == 9 
      || $month == 11)
    {
        $thismonth_days = 31;
    }
    else if($month == 2 && $leap = 1)
    {
        $thismonth_days = 29;
    }
    else if($month == 2 && $leap = 0)
    {
        $thismonth_days = 28;
    }
    else
    {
        $thismonth_days = 30;
    }

    for($i = 0; $i < 8; $i++)
    {
        echo "<tr>";
        for($j = 0; $j < 7; $j++)
        {
            //第一列:年月
            if($i == 0)
            {
                // colspan是合併row
                echo "<td colspan = '7'>".$year."年".$month."月"."</td>";
                break;
            }

            //第二列:星期
            else if($i == 1)
            {
                //六日紅色
                if($j == 0||$j == 6)
                {
                    echo "<td class='color'>".$days[$j]."</td>";
                }
                else
                {
                    echo "<td>".$days[$j]."</td>";
                } 
            }

            //第三列空格子合併
            else if($j < $firstday && $firstday != 7 && $i == 2)
            {
                echo "<td colspan = {$firstday}></td>";
                $j = $firstday - 1;
            }

            //開始印日，到指定天數停
            else if($days_count <= $thismonth_days)
            {
                //六日紅色
                if($j == 0 || $j == 6)
                {
                    echo "<td class='color'>{$days_count}</td>";
                }
                else
                {
                    echo "<td>{$days_count}</td>";
                }
                $days_count++;
            }
        }

        //最後一列空格子合併
        if($days_count == $thismonth_days + 1)
        {
            echo "<td colspan = 6></td>";
            echo "</tr>";
            break;
        }
        echo "</tr>";
    }
    ?>
</table>