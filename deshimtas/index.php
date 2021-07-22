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

echo "time is: " .$h. " : " .$m. " : " . $s. "<br>";
echo "extra time is: " .$extratime. "<br>";

$newH = 0;
$newM = 0;
$newS = 0;

$newS = $s+$extratime;



?>
</body>
</html>