<?php

$a = 10;
$b = 20;

if($a == $b) {
    echo "É igual!";
} else {
    echo "Não é igual!";
}
echo "<br>";

$a = 10;
$b = 10;

if($a == $b) {
    echo "É igual!";
} else {
    echo "Não é igual!";
}

echo "<br>";

if($a === $b) {
    echo "É igual!";
} else {
    echo "Não é igual!";
}

echo "<br>";

$a = 10;
$b = 10;

if($a === $b) {
    echo "É igual!";
} else {
    echo "Não é igual!";
}

echo "<br>";

if($a != $b) {
    echo "Não é igual!";
} else {
    echo "É igual!";
}

echo "<br>";

if($a !== $b) {
    echo "Não é igual!";
} else {
    echo "É igual!";
}

echo "<br>";

$a = 10;
$b = "10";

if($a !== $b) {
    echo "Não é igual!";
} else {
    echo "É igual!";
}