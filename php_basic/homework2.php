<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找字串</title>
</head>
<body>
    印出單字和字母的位置<br>
    <?php
        $str = "I am the storm that is approaching.";
        $search = "the";

        $found = false;

        $i = 0;
        $p = "";
        while($i < strlen($str))
        {
            $e = ($str[$i] ==  $search);
            if($e == 1)
            {
                $p .= "$i" . ",";
                $found = true;
            }
            $i++;
        }
        echo "字串:$str";
        echo"<br>";
        echo "尋找:$search";
        echo"<br>";
        if($found == false)
        {
            echo "不在此字串";
        }
        else
        {
            echo "位置在" . "$p";
        }
    ?>
</body>
</html>