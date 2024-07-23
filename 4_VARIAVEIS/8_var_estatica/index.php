<?php

function Teste() {

    $a = 0;

    while ($a < 10) {
        $a++;
        echo "$a <br>";
    } 
};

Teste();
echo "<br> <br>";


function Teste2() {
    static $b = 0;
    $b++;

    echo "$b <br>";
}

Teste2();
Teste2();
Teste2();
Teste2();