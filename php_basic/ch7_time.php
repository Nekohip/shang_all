<h3>日期與時間</h3>
<?php
date_default_timezone_set("Asia/Taipei");
//Y:4位數字年,y:2位數字年,m:含0數字月,M:三字母月,d:含0二位數日(01-31),D三字母星期(mon-sun)
echo date("Y-m-d");
echo "<br>";
//j:無0日
echo date("Y-m-j");
echo "<br>";
//G:無0小時(24),g:無0小時(12),i:帶0分鐘,s:含0秒
echo date("Y-m-d G:i:s");
echo "<br>";
//H:含0小時(24),h:含0小時(12)
echo date("Y-m-j h:i:s");

echo "<br><br>";

//strtotime() >> 將日期字串轉成Unix時間戳(從1970/1/1 00:00:00 UTC開始算的秒數)
echo strtotime("2025-11-3");
echo "<br>";
echo strtotime("now");
echo "<br>";
echo strtotime("now")-strtotime("2025-11-3");
?>

<h3>給定兩個日期，計算中間間隔天數</h3>
<?php
$day1 = '2025-11-03 12:00:00';
$day2 = '2025-11-07 12:00:00';
//相差幾秒>轉成天數
$gap = abs(strtotime($day1) - strtotime($day2)) / (60*60*24) - 1;
echo $day1."與".$day2."之間有".$gap."天";
?> 

<h3>計算距離自己下一次生日還有幾天</h3>
<?php
$birthday = "1999-08-29";
//date(格式,時間戳) >> 格式化日期
//date("Y") >> 沒有指定時間戳就會取今天日期，所以回傳今年
$bd_thisyear = date(date("Y")."-m-d", strtotime($birthday));
//生日已過 > 生日+1年
//strtotime("指令", 時間戳)，指令:now >> 今天時間戳, +1 year >> +時間戳一年
if(strtotime("now") > strtotime($bd_thisyear))
{
    $bd_thisyear = date("Y-m-d", strtotime("+1 year", strtotime($bd_thisyear)));
}
$days_to_bd = (abs(strtotime($bd_thisyear) - strtotime(date("Y-m-d")))
              / (60*60*24)) - 1;
echo "距離下一次生日 $bd_thisyear 還有".$days_to_bd."天";
?>

<hr>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>
<li>1.2021/10/05</li>
<li>2.10月5日 Tuesday</li>
<li>3.2021-10-5 12:09:05</li>
<li>4.2021-10-5 12:9:5</li>
<li>5.今天是西元2021年10月5日 上班日(或假日)</li>
<br>

<?php
$date = "2021-10-05";
echo "1.".date("Y/m/d", strtotime($date));
echo "<br><br>";
echo "2.".date("m月d日 l");
echo "<br><br>";
echo "3.".date("Y-m-d G:i:s");
echo "<br><br>";
echo "4.".date("Y-m-d G"); echo ":"; echo date("i")*1; echo ":"; echo date("s")*1;
echo "<br><br>";
echo "5."."今天是".date("Y年m月d日 ");
if(date("N") >= 6)
{
    echo "假日";
}
else
{
    echo "上班日";
}
echo "<br><br>";
?>