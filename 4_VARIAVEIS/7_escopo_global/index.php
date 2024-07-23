<?php

$teste = "Teste";

function primeiroTeste() {
    $teste = "Primeiro Teste";
    echo $teste;
}

echo $teste;
echo "<br>";
primeiroTeste();

function segundoTeste() {
    
    global $teste;
    $teste = "Segundo Teste";
    echo $teste;
}

echo "<br>";
segundoTeste();