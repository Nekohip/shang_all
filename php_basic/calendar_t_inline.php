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
    font-size:16px;
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
$targetDay=date("Y-m-d");
//$targetDay="2025-1-01";
$Ttime=strtotime($targetDay);
$month=date("m",$Ttime);

$firstDayMonth=date("Y-m-1",$Ttime);
$firstWeek=date("w",strtotime($firstDayMonth));
$monthDays=date("t",$Ttime);
$monthWeeks=ceil(($monthDays + $firstWeek)/7);
$tableFirstDay=strtotime("-$firstWeek days",strtotime($firstDayMonth));

?>
<table>
    <tr>
        <td>今天是:<?=date("Y-m-d");?></td>
        <td>月份:<?=$month;?></td>
        <td>本月第一天:<?=$firstDayMonth;?></td>
    </tr>
    <tr>
        <td>這個月1號是星期:<?=$firstWeek;?></td>
        <td>這個月有 <?=$monthDays;?> 天</td>
        <td>這個月有 <?=$monthWeeks;?> 周</td>
    </tr>
    <tr>
        <td>這個月曆第一格的日期為:<?=date("Y-m-d",$tableFirstDay);?></td>
        <td></td>
        <td></td>
    </tr>
</table>

<?php

//開始畫月曆
echo "<h2 style='text-align:center'>".$month."月</h2>";
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

echo "</table>";
?>

<!-- div inline-box版本 -->
<style>
.container{
    width:500px;
    margin:auto;
}
.container div{
    display:inline-block;
    width:calc(500px / 7);
    height:40px;
    line-height:40px;
    text-align: center;
    border:1px solid #999;
    box-sizing:border-box;
    margin:-1px 0 0 -1px;
}
</style>
<?php 
//開始畫月曆
echo "<h2 style='text-align:center'>".$month."月</h2>";

echo "<div class='container'>";
echo "<div>日</div>";
echo "<div>一</div>";
echo "<div>二</div>";
echo "<div>三</div>";
echo "<div>四</div>";
echo "<div>五</div>";
echo "<div>六</div>";

for($i=0;$i<42;$i++){
    $datetime=strtotime("+$i days",$tableFirstDay);

    if(date("w",$datetime)==0 || date("w",$datetime)==6){

        echo "<div style='background:pink'>";
    }else{

        echo "<div>";
    }

    if($month!=date("m",$datetime)){
        echo "<span style='color:#999'>";
    }else{
        echo "<span>";
    }
    echo date("d" ,$datetime);
    echo "</span>";
    echo "</div>";
}
echo "</div>";
?>
<hr>

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