<?php
$height = $_GET['height'];
$weight = $_GET['weight'];
$bmi = round($weight / ($height / 100) ** 2, 2);
echo '身高:'.$height.'公分<br>';
echo '體重:'.$weight.'公斤<br>';
echo 'BMI值:'.$bmi;
?>