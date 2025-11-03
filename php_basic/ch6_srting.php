<h3>字串取代</h3>
<li>將”aaddw1123”改成”*********”</li><br>

<?php
$str="aaddw1123511a5511a5";
$str_len = strlen($str);
$pdw = "";
for($i = 0; $i < $str_len; $i++)
{
    $pdw .=  "*";
}

echo "原字串:".$str."<br>";
echo "修改後:".str_replace($str, $pdw, $str);
?>

<hr>
<h3>老師解</h3>

<?php
$str="aaddw1123511a5511a5";
$str_len = strlen($str);
$base=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 
'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
echo "原字串:".$str."<br>";

//str_replace(欲取代字,取代字,目標字串)
echo "修改後:".str_replace($base, "*", $str);
?>

<br><br>

<?php
$str="aaddw1123511a5511a5";
$str_len = strlen($str);

echo "原字串:".$str."<br>";
echo "修改後:".str_repeat('*', mb_strlen($str));
?>

<hr>

<h3>字串分割</h3>
<li>將”this,is,a,book”依”,”切割後成為陣列</li>
<?php
$str = 'this,is,a,book';
//explode(以","分割, 目標字串)，回傳陣列
$newstr = explode(",", $str);
echo"<pre>";
print_r($newstr);
echo"/<pre>";
?>

<h3>字串組合</h3>
<li>將上例陣列重新組合成“this is a book”</li><hr>
<?php
//join("合成後每個元素中間插入的東西", 欲合併陣列) >> 將陣列合成一個字串，中間插東西
$combine = join(" ", $newstr);
echo $combine;
?>

<h3>子字串取用</h3>
<li>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</li><hr>
<?php
$str = "The reason why a great man is great is that he resolves to be a 
        great man";
//mb_str(目標字串,開頭字,留x字)，只保留字串的包括開頭的x字
$pre = mb_substr($str, 0, 9);
echo $pre;
echo "...";
?>

<h3>尋找字串與HTML、css整合應用</h3>
<li>給定一個句子，將指定的關鍵字放大</li>
<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
<li>請將上句中的 “程式設計” 放大字型或變色.</li>

<?php
$str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keyword = "程式設計";
$change = "<span style = 'font-size:26px;color:red'>{$keyword}</span>";
$target = str_replace($keyword, $change, $str);
echo $target;
?>

<h3>一個字串中的每個字都加上不同顏色(7種)</h3>
<?php
$str="人工智能正在滲透到幾乎所有行業，而遊戲業務可能是下一個重大變革
    的對象。人工智能工具已經有助於提高幀速率並幫助開發工作，但現在的願景是從人工智能係統構建整個遊戲";
$colors = [
    '#FF5733', // 橘紅色0
    '#33FF57', // 草綠色1
    '#3357FF', // 深藍色2
    '#F1C40F', // 金黃色3
    '#9B59B6', // 紫色4
    '#1ABC9C', // 青綠色5
    '#E74C3C'  // 紅色6 7
];
$keyword = "人工智能";

for($i=0;$i<mb_strlen($str);$i++){

    $color=$colors[$i%7];
    $word=mb_substr($str,$i,1);

    echo "<span style='color:{$color}'>$word</span>";
}

echo "<hr>";

for($i=0;$i<mb_strlen($str);$i++){

    $color=$colors[$i%7];
    $word=mb_substr($str,$i,1);
    //一個字一個字比對，但就算和keyword的其中一個字一樣也會被判定成true
    if(is_int(strpos($keyword,$word))){

        echo "<span style='color:{$color};font-size:26px'>$word</span>";
    }else{

        echo "<span style='color:{$color}'>$word</span>";
    }

}


?>

<h3>呈上題，讓keyword完整句子才變大</h3>

<h3>老師解</h3>
<?php
$start=-1;
$end=-1;

//循環次數:$str長度
for($i=0;$i<mb_strlen($str);$i++){
    //循環取顏色
    $color=$colors[$i%7];
    //逐一取str的字
    $word=mb_substr($str,$i,1);
    //從i開始取數個str的字，每次取"keyword的字數"個字
    $chk=mb_substr($str,$i,mb_strlen($keyword));

    //若chk和keyword一樣($i後四個字是"人工智能")，設定座標，不一樣就不會變動，保留到下個迴圈
    if($chk==$keyword){
        $start=$i;  //start=0 
        $end=$i+(mb_strlen($keyword)-1);  //end=0+4-1=3
    }
    //i若在座標範圍內字就改大
    if($start<=$i && $end>=$i){
        echo "<span style='color:{$color};font-size:26px'>$word</span>";
    }
    else{
        echo "<span style='color:{$color}'>$word</span>";
    }
}
?>

<hr>

<h3>我的解法</h3>
<?php
$iskey = 0;  //開關
$count = 0;  //計數
for($i=0;$i<mb_strlen($str);$i++){

    $color=$colors[$i%7];
    $word=mb_substr($str,$i,1);
    //
    if(mb_substr($str,$i,4) == $keyword)
    {
        $iskey = 1;
    }
    //一個字一個字比對，但就算和keyword的其中一個字一樣也會被判定成true
    if(is_int(strpos($keyword,$word)) && $iskey == 1){

        echo "<span style='color:{$color};font-size:26px'>$word</span>";
        $count++;
    }else{

        echo "<span style='color:{$color}'>$word</span>";
    }
    
    if($count >= mb_strlen($keyword))
    {
        $iskey = 0;
        $count = 0;
    }
}
?>