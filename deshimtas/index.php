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

$h = rand(0,23);
$m = rand(0,59);
$s = rand(0,59);
$extratime = rand(0,300);

echo "time is: " .
substr("0".$h,-2). " : " .
substr("0".$m,-2). " : " .
substr("0".$s,-2). "<br>";
echo "extra time is: " .$extratime. "<br>";

$newH = 0;
$newM = 0;
$newS = 0;

$newS = $s+$extratime;

$newM = $m + (int)($newS/60);
$newS = $newS%60;

$newH = $h + (int)($newM/60);
$new = $newM%60;

$days = "";
if($newH>23){
    $days = "01: ";
    $newH = 0;
}

echo "time is: " .
$days.
substr("0".$newH,-2).
 ":".substr("0".$newM,-2). 
 ":".substr("0".$newS,-2). "<br>";


?>
</body>
</html>