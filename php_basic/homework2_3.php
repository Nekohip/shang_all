<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找字串3</title>
</head>
<body>
    印出單字和字母的位置<br>
    <?php
        echo "for<br>";
        $str = "後台訂單功能的內容其實都是前面做過的功能的組合
        ，因此可以把前台訂單的頁面複製過來修改就可以了，加快解題速度。";
        $search = "台";

        $found = false;
        $pos= "";
        $count = 0;
        //用"被找字串長度"和"要找的字串長度"計算要找幾次
        for($i = 0; $i < mb_strlen($str) - mb_strlen($search) + 1; $i++)
        {
            //mb_substr(<目標字串>, <從i開始>, <x字後結束>) 回傳字串中"i~x"間的字串
            $target = mb_substr($str, $i, mb_strlen($search));
            //用"i~$search長度"間的字串對比是否和$search字串一樣
            if($search == $target)
            {
                $pos .= "$i, ";
                $found = true;
            }
            $count++;
        }

        echo "字串:$str";
        echo"<br>";
        echo "尋找:$search";
        echo"<br>";

        if($found == true)
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