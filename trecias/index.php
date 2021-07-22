<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$rand1 = rand(0,25);
$rand2 = rand(0,25);
$rand3 = rand(0,25);

echo $rand1 . " " . $rand2 . " " . $rand3 . "<br>";

if ($rand1 > $rand2 && $rand2 > $rand3 || $rand3 > $rand2 && $rand2 > $rand1){
    echo $rand2;
}
    else if ($rand2 > $rand1 && $rand1 > $rand3 || $rand3 > $rand1 && $rand1 > $rand2){
    echo $rand1;
    }
    else if ($rand1 > $rand3 && $rand3 > $rand2 || $rand2 > $rand3 && $rand3 > $rand1){
    echo $rand3;
    }


else echo "per sudetinga :))";






?>
    
</body>
</html>