<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找字串2</title>
</head>
<body>
    印出單字和字母的位置<br>
    <?php
        echo "for<br>";
        $str = "後台訂單功能的內容其實都是前面做過的功能的組合
        ，因此可以把前台訂單的頁面複製過來修改就可以了，加快解題速度。";
        $search = "前台";

        $pos= -1;
        $count = 0;
        for($i = 0; $i < mb_strlen($str) - mb_strlen($search) + 1; $i++)
        {
            $target = mb_substr($str, $i, mb_strlen($search));
            if($search == $target)
            {
                $pos = $i;
            }
            $count++;
        }
        echo "字串:$str";
        echo"<br>";
        echo "尋找:$search";
        echo"<br>";
        if($pos >= 0)
        {
            echo "位置在" . "$pos";
        }
        else
        {
            echo "找不到字串";
        }

        echo "<hr>while<br>";

        while($pos <= 0 && $count <= mb_strlen($str) - mb_strlen($search) + 1)
        {
            $target = mb_substr($str, $i, mb_strlen($search));
            if($search == $target)
            {
                $pos = $count;
            }
            $count++;
        }
        echo "字串:$str";
        echo"<br>";
        echo "尋找:$search";
        echo"<br>";
        if($pos >= 0)
        {
            echo "位置在" . "$pos";
        }
        else
        {
            echo "找不到字串";
        }

        echo "<hr>函數<br>";

        echo "字串:$str";
        echo"<br>";
        echo "尋找:$search";
        echo"<br>";
        echo"位置在:";
        echo mb_strpos($str, $search);
    ?>
</body>
</html>