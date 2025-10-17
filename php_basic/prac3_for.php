<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            margin:5px 5px 5px 5px;
        }
        .box1{
            border:1px solid black;
            width:fit-content;
        }
        td{
            padding:5px 5px 5px 5px;
        }
    </style>
</head>
<body>
<div class="box1">
    <table>
        <?php
            for($i = 1; $i <= 9; $i++)
            {
                echo"<tr>";
                for($j = 1; $j <= 9; $j++)
                {
                    echo "<td>";
                    echo $j . 'x' . $i . "=" . $i * $j;
                    echo "</td>";
                }
            }
            
        ?>
</body>
</html>