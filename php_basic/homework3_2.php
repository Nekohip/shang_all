<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>形狀</title>
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

        echo "<br>5.矩形(簡化)<br><br>";

        $n5 = 9;
        for($i = 1; $i <= $n5; $i++)
        {
            for($j = 1; $j <= $n5; $j++)
            {
                if($i == 1 || $i == $n5 || ($i > 1) && ($j == 1 || $j == $n5))
                {
                    echo "*";
                }
                else
                {
                    echo "&ensp;";
                }
            }
            echo "<br>";
        }


        echo "<br>6.矩形2(直覺，可變大小)<br><br>";

        $n6 = 7;
        $sp1 = 0;
        $sp2 = $n6 - 4;

        for($i = 1; $i <= ($n6+1)/2; $i++)
        {
            if($i == 1)
            {
                for($j = 0 ; $j < $n6; $j++)
                {
                    echo "*";
                }
                echo "<br>";
            }
            else if($i != ($n6 + 1)/2)
            {                
                echo "*";
                for($j = 0 ; $j < $sp1; $j++)
                {
                    echo "&ensp;";
                }
                echo "*";
                for($k = 0 ; $k < $sp2; $k++)
                {
                    echo "&ensp;";
                }
                echo "*";
                for($l = 0 ; $l < $sp1; $l++)
                {
                    echo "&ensp;";
                }
                echo "*";
                echo "<br>";
                $sp1+=1;
                $sp2-=2;
            }
            else
            {
                echo "*";
                for($m = 0 ; $m < $sp1; $m++)
                {
                    echo "&ensp;";
                }
                echo "*";
                for($n = 0 ; $n < $sp1; $n++)
                {
                    echo "&ensp;";
                }
                echo "*";
            }
        }
        
        // echo "<br>$sp1 $sp2<br>";
        echo "<br>";
        $sp1-=1;
        $sp2+=2;

        for($i = 1; $i <= $n6-($n6+1)/2; $i++)
        {
            if($i == $n6-($n6+1)/2)
            {
                for($j = 0 ; $j < $n6; $j++)
                {
                    echo "*";
                }
                echo "<br>";
            }
            else if($i != ($n6 + 1)/2)
            {                
                echo "*";
                for($j = 0 ; $j < $sp1; $j++)
                {
                    echo "&ensp;";
                }
                echo "*";
                for($k = 0 ; $k < $sp2; $k++)
                {
                    echo "&ensp;";
                }
                echo "*";
                for($l = 0 ; $l < $sp1; $l++)
                {
                    echo "&ensp;";
                }
                echo "*";
                echo "<br>";
                $sp1-=1;
                $sp2+=2;
            }
            else
            {
                echo "*";
                for($m = 0 ; $m < $sp1; $m++)
                {
                    echo "&ensp;";
                }
                echo "*";
                for($n = 0 ; $n < $sp1; $n++)
                {
                    echo "&ensp;";
                }
                echo "*";
            }
        }

        echo "<br>6.矩形2(簡化，不能變大小)<br><br>";

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
                    echo "&ensp;";
                }
            }
            echo "<br>";
        }

    ?>
</body>
</html>