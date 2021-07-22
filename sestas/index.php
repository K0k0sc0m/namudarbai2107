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

$a = rand(1,6);

echo $a . "<br>";

if ($a==1){
    echo "<h1>" . $a . "</h1>";
}

if ($a==2){
    echo "<h2>" . $a . "</h2>";
}

if ($a==3){
    echo "<h3>" . $a . "</h3>";
}

if ($a==4){
    echo "<h4>" . $a . "</h4>";
}

if ($a==5){
    echo "<h5>" . $a . "</h5>";
}

if ($a==6){
    echo "<h6>" . $a . "</h6>";
}
?>


</body>
</html>