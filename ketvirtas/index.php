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


$a = rand(0,10);
$b = rand(0,10);
$c = rand(0,10);

echo "a krastine = " . $a . "; b krastine = " . $b . "; c kastine = " . $c . ";" . "<br>" ;

if($a+$b>$c && $a+$c>$b && $b+$c>$a && $a!=0 && $b!=0 && $c!=0){
    echo "trikamkis gali buti sukurtas. <br>";
    
}

else 
    echo "trikampis negalimas";


?>


</body>
</html>