<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$score=85;

if($score>60)
{
    echo "及格";
}
else
{
    echo "不及格";
}

//直接顯示結果
echo ($score >= 60)?'及格':'不及格';
//變數
$result=($score >= 60)?'及格':'不及格';
?>
</body>
</html>