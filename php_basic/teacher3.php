<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 7;
    for($i=1 ; $i<=$n ; $i++){

        for( $j=1 ; $j<=$n ; $j++ )
        {
        
            if($i==1 || $i==$n){
              echo "*";      
            }
            else if($j==1 || $j==$n || $j==$i || $j==($n-$i+1))
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