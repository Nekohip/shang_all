<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vergil = "I am the storm that is approaching.";
        $finding = "t";
        $found = false;

        $i = 0;
        $p = "";
        while($i < strlen($vergil))
        {
            $e = ($vergil[$i] == $finding);
            if($e == 1)
            {
                $p .= "$i" . ",";
                $found = true;
            }
            $i++;
        }
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