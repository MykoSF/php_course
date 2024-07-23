<?php

$a = 1;
$b = 2;

function local() {
    $a = 10;
    echo "local: $a <br>";
    static $b = 20;
    $b += 10;
    echo "local: $b <br>";
}

echo "global = " . $a . "<br>";
echo "global = " . $b . "<br>";
local();
local();
local();
local();