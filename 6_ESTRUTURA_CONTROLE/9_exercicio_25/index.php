<?php

$int1 = 101.31;
$int2 = 200;
$string1 = "Maykon";
$string2 = "Fonseca";

if(is_int($int1) || is_float($int1)) {
    $numero = $int1 *= 2;
    echo $numero;

    if($numero > 100) {
        echo ", É um número maior que 100!";
    }} else { 
    echo "Não é um número!";
}

echo "<br>";

if(is_int($int2) || is_float($int2)) {
    $numero = $int2 *= 2;
    echo $numero;

    if($int2 > 100) {
        echo ", É um número maior que 100!";
    }} else { 
    echo "Não é um número!";
}

echo "<br>";

if(is_int($string1) || is_float($string1)) {
    $numero = $string1 *= 2;
    echo $numero;

    if($numero > 100) {
        echo ", É um número maior que 100!";
    }} else { 
    echo "Não é um número!";
}

echo "<br>";

if(is_int($string2) || is_float($string2)) {
    $numero = $string2 *= 2;
    echo $numero;
    if ($numero > 100) {
        echo ", É um número maior que 100!";
    }} else { 
    echo "Não é um número!";
}