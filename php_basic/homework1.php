<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:50vw;
            height:35vh;
            border:1.5px solid black;
            text-align:center;
            border-collapse:collapse;
        }
        div{
           border:1.5px solid black;
           width:fit-content;
           
           margin:auto;
        }
        .box1{
            padding:15px 15px 15px 15px;
        }
        .box2{
            padding:10px 10px 10px 10px;
        }
        td{
            width:1.5vw;
            height:5vh;
            border:1.5px solid #9e9e9e;
        }
        .top{
            background-color:#dbdbdb;
        }
    </style>
</head>
<body>
    <div class="box1">
    <div class="box2">
    <table>
    <?php
        echo "<tr class='top'>";
        echo "<td>";
        echo "</td>";
        for($i = 1; $i <= 9; $i++)
        {
            for($i = 1; $i <= 9; $i++)
            {
                echo "<td>";
                echo "$i";
                echo "</td>";
            }
        }
        echo "</tr>";
        for($i = 1; $i <= 9; $i++)
        {
            echo "<tr>";
            echo "<td class='top'>";
            echo "$i";
            echo "</td>";
            for($j = 1; $j <= 9; $j++)
            {
                echo "<td>";
                $k = $j * $i;
                echo "$k";
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    </div>
    </div>
</body>
</html>