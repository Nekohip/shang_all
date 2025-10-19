<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        for($i = $n2 ;$i > 0; $i--)
        {
            for($j = $i ;$j > 0; $j--)
            {
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>3.正三角形<br><br>";
        $n3 = 5;
        $m = 1;
        for($i = $n3 ;$i > 0; $i--)
        {
            for($j = $i - 1; $j > 0; $j--)
            {
                echo "&ensp;";
            }
            for($k = 0; $k < $m; $k++)
            {
                echo "*";
            }
            echo "<br>";
            $m += 2;
        }

        echo "<br>4.菱形<br><br>";

        $n4 = 5;
        $m = 1;
        for($i = $n4 ;$i > 0; $i--)
        {
            for($j = $i - 1; $j > 0; $j--)
            {
            echo "&ensp;";
            }
            for($k = 0; $k < $m; $k++)
            {
            echo "*";
            }
            echo "<br>";
            $m += 2;
        }

        $m -= 4;
        $n4 -= 1;

        for($i = 1 ;$i <= $n4; $i++)
        {
            for($j = $i; $j > 0; $j--)
            {
                echo "&ensp;";
            }
            for($k = 0; $k < $m; $k++)
            {
                echo "*";
            }
            echo "<br>";
            $m -= 2;
        }

        echo "<br>5.矩形<br><br>";

        $n5 = 7;
        for($i = 1; $i <= $n5; $i++)
        {
            if($i == 1 || $i == $n5)
            {
                for($j = 0 ; $j < $n5; $j++)
                {
                    echo "*";
                }
                echo "<br>";
            }
            else
            {                
                echo "*";
                for($j = 0 ; $j < $n5 - 2; $j++)
                {
                    echo "&ensp;";
                }
                echo "*";
                echo "<br>";
            }
        }

        echo "<br>6.矩形<br><br>";

        $n6 = 7;
        for($i = 1; $i <= $n6; $i++)
        {
            if($i == 1 || $i == $n6)
            {
                for($j = 0 ; $j < $n6; $j++)
                {
                    echo "*";
                }
                echo "<br>";
            }
            else
            {                
                echo "*";
                for($j = 0 ; $j < $n6 - 2; $j++)
                {
                    echo "&ensp;";
                }
                echo "*";
                echo "<br>";
            }
        }
    ?>
</body>
</html>