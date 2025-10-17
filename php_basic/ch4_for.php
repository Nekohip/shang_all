<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 14;
        for($i = 1; $i <= $n; $i += 2)
        {
            echo $i . ",";
        }

        echo"<hr>";

        $n2 = 100;
        for($i = 10; $i <= $n2; $i+=10)
        {
            echo"$i" . ",";
        }

        echo"<hr>";

        $n3 = 100;
        for($i = 3; $i <= $n3; $i++)
        {
            $count = 0;
            for($j = $i; $j > 0; $j--)
            {
                if($i % $j == 0)
                {
                    $count++;
                }
            }
            if($count == 2)
            {
                echo"$i" . ",";
            }
        }

        echo"<hr>";

        //老師解
        //偶數不算(i+=2)、只除到數的開根號
        //本來要跑4000多次的迴圈減少到159次
        $total = 0;

        for($j = 1; $j <= 100; $j += 2)
        {
            $n4 = $j;
            // $count = 0;  //計算除了幾次
            $prime = true;  //判斷2~(n4-1)之間有沒有能整除n4的數

            //將n4從2除到n4-1，有一數能整除他就跳出
            for($i = 2; $i < (int)sqrt($n4); $i++)
            {
                // $count++;
                // $total++;  //計算迴圈總次數
                if($n4 % $i == 0)
                {
                    $prime = false;
                    break;
                }
            }
            //若是質數，prime會保持為true，進入此if中顯示
            if($prime == true)
            {
                echo "$n4".",";
                // echo $n4 . '是質數<br>';
                // echo "==>";
                // echo '一共判斷了' . $count . '次<br>';
            }
        }

        echo "<hr>";
        echo "一共執行了".$total.'次回圈';
    ?>
</body>
</html>