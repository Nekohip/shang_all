<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*$score = 101;
        
        echo ($score >= 60 && $score <= 100)?'及格':'不及格';
        echo "<hr>";

        if($score > 0 && $score <= 59)
        {
            $level = "E";
        }
        else if($score >= 60 && $score <= 69)
        {
            //<0 or >=60
            $level = "D";
        }
        else if($score >= 70 && $score <= 79)
        {
            $level = "C";
        }
        else if($score >= 80 && $score <= 89)
        {
            $level = "B";
        }
        else if($score >= 90 && $score <= 100)
        {
            $level = "A";
        }
        else
        {
            $level = "你是認真的嗎?";
        }

        echo "成績等級:" . $level;*/

        //不用每個都要兩條件判斷
        $score = 60;
        
        echo ($score >= 60 && $score <= 100)?'及格':'不及格';
        echo "<hr>";

        if($score < 0 || $score > 100)
        {
            echo"你是認真的嗎?";
            exit();
        }
        if($score > 0 && $score <= 59)
        {
            $level = "E";
        }
        //程式照順序判斷，上個if判斷過0<score<=59，下個else if也會在範圍內
        else if($score <= 69)
        {
            //<0 or >=60
            $level = "D";
        }
        else if($score <= 79)
        {
            $level = "C";
        }
        else if($score <= 89)
        {
            $level = "B";
        }
        else if($score <= 100)
        {
            $level = "A";
        }

        echo "成績等級:" . $level;
    ?>

</body>
</html>