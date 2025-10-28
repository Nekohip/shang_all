<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //   key   index
    $a = [1 => "A",
          2 => "B",
          3 => "C",
        "姓名" => '詹尚諭'];  //key可以是字串
    //顯示陣列中所有元素及座標
    print_r($a);
    echo"<hr>";

    //沒給key，自動從0開始給key
    $b = ["A", "B", "C"];
    print_r($b);

    echo "<br>";
    //用key call資料
    echo $a[3];
    echo "<br>";
    echo $a['姓名'];
    echo "<br>";
    echo $b[0];
    ?>
</body>
</html>