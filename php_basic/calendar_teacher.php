<h2>月曆製作提示</h2>
<style>
table{
    border-collapse:collapse;
    max-width:70%;
    min-width:500px;
    margin:10px auto;
}    
table td,table th{
    border:1px solid #999;
    padding:5px 10px;
    text-align:center;
}
table th{
    background:skyblue;
}
</style>
<?php 
$today=strtotime("now");
echo "今天是:".date("Y-m-d");
echo "<br>";
$targetDay=date("Y-m-d");
//當日時間戳
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);
echo "月份:".$month;
echo "<br>";
//一日
$firstDayMonth=date("Y-m-1",$Ttime);
echo "本月第一天:".$firstDayMonth;
echo "<br>";
//一日星期(0-6)
$firstWeek=date("w",strtotime($firstDayMonth));
echo "<br>";
echo "這個月1號是星期:".$firstWeek;
echo "<br>";
//總天數
$monthDays=date("t",$Ttime);
echo "這個月有 ".$monthDays."天";
echo "<br>";
//總天數+第一天星期 / 7 無條件進位 > 本月幾週
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
echo "這個月有 ".$monthWeeks." 周";
echo "<br>";
//一日-一日星期(顯示上個月的尾幾日，填滿空格)
$tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));
echo "這個月曆第一格的日期為:". date("Y-m-d",$tableFirstDay);
echo "<br>";

//開始畫月曆
echo "<h2 style='text-align:center'>".$month."月";
echo "<table>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";

//週x7(總共幾格)
//判斷第i格要填什麼 (怎麼分辨i要當格還是列能縮短code?)
for($i=0;$i<$monthWeeks*7;$i++){
    //星期天+<tr>
    if($i%7==0){
        echo "<tr>";
    }
    echo "<td>";
    //第一天+i天，能將頭/尾端空格填上下個月尾/頭幾日
    echo date("d" ,strtotime("+$i days",$tableFirstDay));
    echo "</td>";
    //星期六+</tr>換行
    if($i%7==6){
        echo "</tr>";
    }
    
}

echo "<table>";
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>