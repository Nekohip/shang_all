<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            /*使用每個字都一樣大的字型*/
            font-family:'Courier New', 'Courier', 'monospace';
        }
    </style>
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

echo "菱形-對角線<br>";
$x=9;
$y=0;

if($x%2==0){
    $x=$x+1;
}
$mid=floor($x/2);

for($i=0;$i<$x;$i++){
    if($i>$mid){
        $y=$y-1;
    }else{
        $y=$i;
    }

    //echo $i."-".$y;


    for($k=0;$k<$mid-$y;$k++){
        echo "&nbsp;";
    }
    //echo $y;
    for($j=0;$j<2*$y+1;$j++){
        
        if($j==0 || $j==2*$y || $j==$y || $i==$mid){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
    ?>
</body>
</html>