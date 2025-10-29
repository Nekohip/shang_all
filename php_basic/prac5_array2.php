<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array2</title>
</head>
<body>
    <h2>閏年陣列</h2><br>
    <?php
    $leap = [];
    for($i = 2025; $i <= 2225; $i++)
    {
        if(($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0)
        {
            $leap[] = $i;
        }
    }
    echo "<pre>";
    print_r($leap);
    echo "</pre>";

    echo "<hr>";

    $leap2 = [];
    for($i = 2025; $i <= 2525; $i++)
    {
        if(($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0)
        {
            //是閏年，值為1
            $leap2[] = $i;
        }
    }
    //in_array(i, $array)，判斷i是否存在於array中
    $yes_no = in_array(2085, $leap2);
    if($yes_no == true)
    {
        echo "是閏年";
    }
    else
    {
        echo "非閏年";
    }

    echo "<hr>";

    echo "<h3>威力彩1-38，選6個號碼</h3>";
    $wie = [];
    for($i = 0; $i <= 5; $i++)
    {
        $group = [];
        //判斷也能寫count($group)<=6，陣列有6個數之前都會重抽
        for($j = 0; $j < 6; $j++)
        {
            do{
                $num = rand(1, 38);
            }
            while(in_array($num, $group));
            $group[] = $num; 
        }
        $wie[] = $group;
    }

    echo "<pre>";
    print_r($wie);
    echo "</pre>";
    ?>

    <hr>

    <h2>條件改成:count($group)<=6</h2><br>

    <?php
    $group = [];
    //判斷也能寫count($group)<=6，陣列有6個數之前都會重抽
    for($j = 0; count($group)<=6; $j++)
    {
        $num = rand(1, 38);
        if(in_array($num,$group) == false)
        {
            $group[] = $num; 
        }
    }
    foreach($group as $g)
    {
       echo "$g  ";
    }
    ?>

    <hr>
    <h2>天干地支</h2><br>

    <?php
    //ctrl+shift+p > join line >>直行變橫行
    $sky = ["甲", "乙", "丙" ,"丁" ,"戊" ,"己" ,"庚" ,"辛" ,"壬" ,"癸"];
    $land = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];
    $tgdz = [];
    for($i = 0; $i <= 100; $i++)
    {
        //取sky的數，i=10時會回到開頭(10%0=0, 10%1=1...10%10=0, 10%11=1...)
        $tg = $sky[$i % 10];
        $dz = $land[$i % 12];
        $tgdz[$i + 1984]=$tg . $dz;
    }

    foreach($tgdz as $i => $t)
    {
        echo "$i:$t";
        echo "<br>";
    }
    ?>
</body>
</html>