<h3>日期與時間</h3>
<h2>月曆</h2>
<style>
    *{
        font-family:"monospace";
        font-size: 25px;
        box-sizing: border-box;
    }

    .yearmonth{
        width: 500px;
        height: 120px;
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
    .boxsize:hover,
    .yearmonth:hover{
        background-color: lightblue;
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
</style>
    <?php
    // $month = date("m");
    // $year = date("Y");
    //調整月曆年月
    $month = 11;
    $year = 2025;

    $firstweek = date("w", strtotime(date("{$year}-{$month}-1")));
    $firstday = strtotime(date("{$year}-{$month}-1"));
    $thismonth_days = date("t", strtotime(date("{$year}-{$month}")));
    $all_days = strtotime("- $firstweek days", $firstday);
    $days = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];

    echo "<div class='container'>";
    for($i = 0; $i < 8; $i++)
    {
        echo "<div class='calander'>";
        for($j = 0; $j < 7; $j++)
        {
            //第一列:年月
            if($i == 0)
            {
                echo "<div class='yearmonth'>".$year."年".$month."月"."</div>";
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
                if(date('m', $all_days) < $month || date('m', $all_days) > $month)
                {
                    if($j == 0 || $j == 6)
                    {
                        echo "<div class='boxsize color text_gray'>".date('d',$all_days)."</div>";
                    }
                    else
                    {
                        echo "<div class='boxsize text_gray'>".date('d',$all_days)."</div>";
                    }
  
                }
                else
                {
                    if($j == 0 || $j == 6)
                    {
                        echo "<div class='boxsize color'>".date('d',$all_days)."</div>";
                    }
                    else
                    {
                        echo "<div class='boxsize'>".date('d',$all_days)."</div>";
                    }
                }
                $all_days = strtotime("+1 day", $all_days);
            }
        }
        echo "</div>";
    }
    echo "</table>";
    echo "</div>";
    ?>
