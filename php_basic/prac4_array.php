<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array practicing</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table,td,tr{
            padding:5 10;
            border: 1px, solid, black;
        }
    </style>
</head>
<body>
    <?php
    // $student = ['judy' => [["國文","英文","數學","地理","歷史"],[95,64,70,90,84]],
    //           'amo' => [["國文","英文","數學","地理","歷史"],[88,78,54,81,71]],
    //           'john' => [["國文","英文","數學","地理","歷史"],[45,60,68,70,62]],
    //           'peter' => [["國文","英文","數學","地理","歷史"],[59,32,77,54,42]],
    //           'hebe' => [["國文","英文","數學","地理","歷史"],[71,62,80,62,64]]
    //         ];
    $students = ["judy","amo","john","peter","hebe"];
    $subjects = ["國文","英文","數學","地理","歷史"];
    $scores = [
        [95,64,70,90,84],  //judy
        [88,78,54,81,71],  //amo
        [45,60,68,70,62],  //john
        [59,32,77,54,42],  //peter
        [71,62,80,62,64]  //hebe
    ]
    ?>

    <table>
        <?php
        echo "<tr><td></td>";
        //取subjects中的每個元素，在此迴圈中叫"s"，s每圈會換成下個元素
        foreach($subjects as $s)
        {
            echo "<td>";
            echo $s;
            echo "</td>";
        }
        echo "<tr>";

        //用key value方式呈現，idx是key(0,1,2..)，stu是value(陣列元素)
        foreach($students as $idx => $stu)
        {
            echo "<tr>";
            echo "<td>";
            echo $stu . $idx;
            echo "</td>";
            //在二維陣列名旁加上[座標]指定要呼叫哪個陣列
            //idx每個迴圈+1，用它來遍歷scores
            foreach($scores[$idx] as $score)
            {
                echo "<td>";
                echo $score;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <hr>

    <table>
    <?php
    //迴圈生產陣列
    //空陣列
    $ninetimes = [];
    for($i = 1; $i <= 9; $i++)
    {
        for($j = 0; $j <= 9; $j++)
        {
            //將元素加入空陣列
            $ninetimes[] = $j . ' x ' . $i .' = ' . ($j * $i);
        }
    }
        //將print_r排列整齊
        echo "<pre>";
        print_r($ninetimes);
        echo "</pre>";

        echo "<hr>";

        foreach($ninetimes as $idx => $nine)
        {   
            if($idx % 10 == 0)
            {
                echo"<tr>";
                echo"</tr>"; 
            }
            else
            {   
                echo"<td>";
                echo $nine;
                echo"</td>";
            }

        }
    ?>
    </table>

    <hr>

    <?php
    $ninetimes = [];
    for($i = 1; $i <= 9; $i++)
    {
        for($j = 0; $j <= 9; $j++)
        {
            //將元素加入空陣列並賦予座標(三維)
            $ninetimes[$i][$j] = $j * $i;
        }
    }
        //將print_r排列整齊
        echo "<pre>";
        print_r($ninetimes);
        echo "</pre>";

        echo "<br>";

        echo $ninetimes[7][4];
        echo "<br>";
        echo $ninetimes[4][7];
    ?>
</body>
</html>