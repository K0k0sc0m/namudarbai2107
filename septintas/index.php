<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php

$a = rand(-10,10);
$b = rand(-10,10);
$c = rand(-10,10);

$color1 = "red";
$color2 = "red";
$color3 = "red";



if($a < 0){
    $color1 = "green";
}

if($a >  0){
    $color1 = "blue";
}

if ($b < 0){
    $color2 = "green";
}

if($b > 0){
    $color2 = "blue";
}

if ($c < 0){
    $color3 = "green";
}

if($c >  0){
    $color3 = "blue";
} 


echo "<h1 style=\"color:{$color1}\">" . $a . "</h1>";
echo "<h1 style=\"color:{$color2}\">" . $b . "</h1>";
echo "<h1 style=\"color:{$color3}\">" . $c . "</h1>";



?>
</body>
</html>