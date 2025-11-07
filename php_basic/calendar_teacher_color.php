<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆製作</title>
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
</head>
<body>

<h2>月曆製作提示</h2>
<?php 
$today=strtotime("now");
echo "今天是:".date("Y-m-d");
echo "<br>";
$targetDay=date("Y-m-d");
//$targetDay="2025-1-01";
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);
echo "月份:".$month;
echo "<br>";
$firstDayMonth=date("Y-m-1",$Ttime);
echo "本月第一天:".$firstDayMonth;
echo "<br>";
$firstWeek=date("w",strtotime($firstDayMonth));
echo "<br>";
echo "這個月1號是星期:".$firstWeek;
echo "<br>";
$monthDays=date("t",$Ttime);
echo "這個月有 ".$monthDays."天";
echo "<br>";
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
echo "這個月有 ".$monthWeeks." 周";
echo "<br>";
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


for($i=0;$i<42;$i++){
    $datetime=strtotime("+$i days",$tableFirstDay);

    if($i%7==0){
        echo "<tr>";
    }

    if(date("w",$datetime)==0 || date("w",$datetime)==6){

        echo "<td style='background:pink'>";
    }else{

        echo "<td>";
    }
    
    
    if($month!=date("m",$datetime)){
        echo "<span style='color:#999'>";
    }else{
        echo "<span>";
    }
    echo date("d" ,$datetime);
    echo "</span>";
    echo "</td>";

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

</body>
</html>