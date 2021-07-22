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

$rand1 = rand(0,4);
$rand2 = rand(0,4);

echo $rand1 . "<br>";
echo $rand2 , "<br>";

if ($rand1 > $rand2 && $rand2 != 0){
    echo round(($rand1 / $rand2),2); 
}

if ($rand1 > $rand2 && $rand2 == 0){
    echo "dalyba negalyma";
} 

if ($rand2 > $rand1 && $rand1 != 0){
    echo round(($rand1 / $rand2),2); 
}

if ($rand2 > $rand1 && $rand1 == 0){
    echo "dalyba negalyma";
} 

if ($rand2 == $rand1){
    echo "laimejote priza";
} 





?>
    
</body>
</html>