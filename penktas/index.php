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

$a = rand(0,2);
$b = rand(0,2);
$c = rand(0,2);
$d = rand(0,2);

echo $a . " " . $b . " " . $c . " " . $d . "<br>";

$x = 0;
$y = 0;
$z = 0;

if ($a == 0) {
    $x++;
}

if ($b == 0) {
    $x++;
}

if ($c == 0) {
    $x++;
}

if ($d == 0) {
    $x++;
}

if ($a == 1) {
    $y++;
}

if ($b == 1) {
    $y++;
}

if ($c == 1) {
    $y++;
}

if ($d == 1) {
    $y++;
}

if ($a == 2) {
    $z++;
}

if ($b == 2) {
    $z++;
}

if ($c == 2) {
    $z++;
}

if ($d == 2) {
    $z++;
}

echo "nuliu: " . $x . "; vienetu: " . $y . "; dviajetu: " . $z . ".";

?>



</body>
</html>