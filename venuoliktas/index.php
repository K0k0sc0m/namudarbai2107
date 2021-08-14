<?php

$a = rand(1000,9999);
$b = rand(1000,9999);
$c = rand(1000,9999);
$d = rand(1000,9999);
$e = rand(1000,9999);
$f = rand(1000,9999);
$pirmas = 0;
$antras = 0;
$trecias = 0;
$ketvirtas = 0;
$penktas = 0;
$sestas = 0;

echo $a. " " .$b. " " .$c. " " .$d. " " .$e. " " .$f. "<br>";

if ($a > $b && $a > $c && $a > $d $a > $e && $a > $f) {
    $a = $pirmas;
} 
 elseif ($b > $a && $b > $c && $b > $d $b > $e && $b > $f) {
    $b = $pirmas;
 }

 elseif ($c > $a && $c > $b && $c > $d $c > $e && $c > $f) {
    $c = $pirmas;
 }

 elseif ($d > $a && $d > $c && $d > $b $d > $e && $d > $f) {
    $d = $pirmas;
 }

 elseif ($e > $a && $e > $c && $e > $d $e > $b && $e > $f) {
    $e = $pirmas;
 }

 elseif ($f > $a && $f > $c && $f > $d $f > $e && $f > $b) {
    $f = $pirmas;
 }


if ($a < $b && $a > $c && $a > $d $a > $e && $a > $f) {
    $a = $antras;
} 
 elseif ($b < $a && $b > $c && $b > $d $b > $e && $b > $f) {
    $b = $antras;
 }

 elseif ($c < $a && $c > $b && $c > $d $c > $e && $c > $f) {
    $c = $antras;
 }

 elseif ($d < $a && $d > $c && $d > $b $d > $e && $d > $f) {
    $d = $antras;
 }

 elseif ($e < $a && $e > $c && $e > $d $e > $b && $e > $f) {
    $e = $antras;
 }

 elseif ($f < $a && $f > $c && $f > $d $f > $e && $f > $b) {
    $f = $antras;
 }












?>