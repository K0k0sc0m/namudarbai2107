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

$a = rand(0,100);
$b = rand(0,100);
$c = rand(0,100);


if ($a==0) {
    $a = 1;
}

if ($b==0) {
    $b = 1;
}

if ($c==0) {
    $c = 1;
}

$d = ($a*$b*$c)/3;

echo "pirmas skaicius: " ,$a, "; antras skacius: " ,$b, "; trecias skaicius: " ,$c, ".<br>";
echo "vidurkis skaiciu = ";
echo(round($d,0). "<br>");

if ($a<10 || $a>90 ) {
    $a = 1;
}

if ($b<10 || $b>90 ) {
    $b = 1;
}

if ($c<10 || $c>90 ) {
    $c = 1;
}

$e = ($a*$b*$c)/3;

echo "vidurkis skaiciu = ";
echo(round($e,0). "<br>");



?>

</body>
</html>