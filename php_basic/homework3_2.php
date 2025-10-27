<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>形狀</title>
    <style>
        *{
            /*使用每個字都一樣大的字型*/
            font-family:'Courier New', 'Courier', 'monospace';
        }
    </style>
</head>
<body>

    <?php
        echo "1.直角三角形<br><br>";

        $n1 = 5;
        for($i = 1 ; $i <= $n1; $i++)
        {
            for($j = $i ; $j > 0; $j--)
            {
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>2.倒直角三角形<br><br>";

        $n2 = 5;
        for($i = 0 ;$i < $n2; $i++)
        {
            for($j = $n2 ;$j > $i; $j--)
            {
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>3.正三角形-老師解<br><br>";
        //2i+1一定是奇數
        $n3 = 7;
        for($i = 0 ;$i < $n3; $i++)
        {
            for($j = 0 ; $j < $n3 - $i ; $j++)
            {
                echo "&nbsp";
            }
            for($k = 0; $k < (2 * $i + 1); $k++)
            {
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>4.菱形<br><br>";

        //2i+1一定是奇數
        $n4 = 8;
        for($i = 0 ;$i < $n4; $i++)
        {
            for($j = 0 ; $j < $n4 - $i ; $j++)
            {
                echo "&nbsp";
            }
            $count = 2 * $i + 1;
            for($k = 0; $k < $count; $k++)
            {
                echo "*";
            }
            echo "<br>";
        }
        $count -= 2;

        for($i = 0 ;$i < $n4 - 1; $i++)
        {
            for($j = 0; $j < $i + 2; $j++)
            {
                echo "&nbsp";
            }
            for($k = 0; $k < $count; $k++)
            {
                echo "*";
            }
            echo "<br>";
            $count -= 2;
        }

        echo "<br>4.菱形-老師解<br><br>";

        $x = 10;  //列數
        $y = 0;

        //菱形列數一定奇數，列數是偶數幫他+1
        if($x % 2 == 0)
        {
            $x = $x + 1;
        }

        for($i = 0; $i < $x; $i++)
        {
            //floor(x) >> 無條件捨去
            //當i過n的一半時y開始遞減
            if($i > floor($x / 2))
            {
                $y -= 1;
            }
            else
            {
                $y = $i;
            }

            for($k = 0 ;$k < floor($x / 2) - $y; $k++)
            {
                echo "&nbsp";
            }
            for($j = 0 ; $j < 2 * $y + 1;$j++)
            {
                echo "*";
            }
            echo"<br>";
        }

        echo "<br>5.矩形(簡化)<br><br>";

        $n5 = 7;
        for($i = 1; $i <= $n5; $i++)
        {
            for($j = 1; $j <= $n5; $j++)
            {
                if($i == 1 || $i == $n5 || $j == 1 || $j == $n5)
                {
                    echo "*";
                }
                else
                {
                    echo "&nbsp";
                }
            }
            echo "<br>";
        }

        echo "<br>6.矩形(不能變大小)<br><br>";

        $n6 = 7;
        for($i = 1; $i <= $n6; $i++)
        {
            for($j = 1; $j <= $n6; $j++)
            {
                if($i == 1 || $i == $n6
                    ||(($i == 2 || $i == $n6 - 1) && ($j == 1 || $j == 2 || $j == ($n6 - 1) || $j == $n6))
                    ||(($i == 3 || $i == $n6 - 2) && ($j == 1 || $j == 3 || $j == ($n6 - 2) || $j == $n6))
                    ||($i == 4 && ($j == 1 || $j == ($n6 - 3) || $j == $n6)))
                {
                    echo "*";
                }
                else
                {
                    echo "&nbsp";
                }
            }
            echo "<br>";
        }

        echo "<br>6.矩形-對角線(能改大小)<br><br>";

        $n6 = 9;
        if($n6 % 2 == 0)
        {
            $n6 += 1;
        }
        for($i = 1; $i <= $n6; $i++)
        {
            for($j = 1; $j <= $n6; $j++)
            {
                if($i == 1 || $i == $n6 || $i == $j || $i + $j == $n6 + 1 || $j == 1 || $j == $n6)
                {
                    echo "*";
                }
                else
                {
                    echo "&nbsp";
                }
            }
            echo "<br>";
        }

        echo "<br>7.菱形-對角線<br><br>";

        $x = 5;  //列數
        $y = 0;

        //菱形列數一定奇數，列數是偶數幫他+1
        if($x % 2 == 0)
        {
            $x += 1;
        }
        //floor(x) >> 無條件捨去
        $half = floor($x/2);

        for($i = 0; $i < $x; $i++)
        {
            
            //當i過n的一半時y開始遞減
            if($i > $half)
            {
                $y -= 1;
            }
            else
            {
                $y = $i;
            }

            for($k = 0 ;$k < $half - $y; $k++)
            {
                echo "&nbsp";
            }
            for($j = 0 ; $j < 2 * $y + 1;$j++)
            {
                if(($i + $j) == $half || ($x - 1 - $j) == ($half - $i) 
                    || ($i - $j) == $half || ($x - 1 - $j) == ($i - $half)
                    || $j == $half  || $i == $half)
                {
                    echo "*";
                }
                else
                {
                    echo "&nbsp";
                }
            }

            echo"<br>";
        }

    ?>
</body>
</html>