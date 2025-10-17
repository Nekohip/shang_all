<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$fruit = "apple";

switch($fruit)
{
    case "banana":
        echo"這是香蕉";
        break;  //沒有break會繼續執行下一行
    case "apple":
        echo"這是蘋果";
        break;
    default:
        echo"未知的水果";
    //不用break
}

?>
</body>
</html>