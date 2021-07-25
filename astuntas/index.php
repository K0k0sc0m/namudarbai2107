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

$a = rand(5,3000);
$price = 1;
$finalprice = 0;

echo "zvakiu kiekis: " , $a , "<br>";

if ( $a < 1000 ) {
    $finalprice = ($a*$price);
    echo "kaina uz zvakes bus: " , $finalprice , " euru. <br>";
}
    if ($a >= 1000 && $a < 2000){
        $finalprice = (($a*$price)-($a*$price*0.03));
        echo "kaina uz zvakes bus: " , $finalprice , " euru. <br>";
    }
        if ($a >= 2000 && $a <= 3000) {
            $finalprice = (($a*$price)-($a*$price*0.04));
            echo "kaina uz zvakes bus: " , $finalprice , " euru. <br>";
        }
   





?>

</body>
</html>