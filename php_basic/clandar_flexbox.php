<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .container{
            width:80%;
            height: 80vh;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        for($i=0;$i<42;$i++)
        {
            echo "<div>";

        }
        ?>
    </div>
</body>
</html>