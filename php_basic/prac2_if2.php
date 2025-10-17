<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
    <ul>
        <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
        <li>公元年分除以4不可整除，為平年。</li>
        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
    </ul>

    <?php
        //老師解1
        $year = 2100;
        if($year % 4 != 0)
        {
            echo "{$year}年是平年";
        }
        else
        {
            if($year % 100 != 0)
            {
                echo "{$year}年是閏年";
            }
            else 
            {
                if($year % 400 == 0)
                {
                    echo "{$year}年是閏年";
                }
                else
                {
                    echo "{$year}年是平年";
                }
            }
        }
        
        echo "<hr>";
        
        //自己解

        if(($year % 4 == 0 && $year % 100 != 0) || ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0))
        {
            echo "{$year}為閏年";
        }
        else
        {
            echo "{$year}為平年";
        }

        echo "<hr>";
        //老師簡化
        //短路求值(邏輯先決):(a || b)，a是true，b條件就不會被執行
        //從左邊判斷到右邊，左邊判斷過的右邊不用再判斷
        //年份小的放左邊能減少右邊判斷的次數，因為能被4整除的年份比較多
        if(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0)
        {
            echo "{$year}為閏年";
        }
        else
        {
            echo "{$year}為平年";
        }

    ?>
    
</body>
</html>