<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1 ; $i<=9 ; $i++){

        for( $j=1 ; $j<=9 ; $j++ )
        {
        
            if($i==1 || $i==9){
              echo "*";      
            }
            else if($j==1 || $j==9 || $j==$i || $j==(9-$i+1))
            {
              echo "*";          
            }
            else
            {
              echo "&ensp;";
            }
        }

      echo "<br>";
    }
    ?>
</body>
</html>