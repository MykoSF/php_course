<?php

$a = 5 / 2;

if(is_float($a)) {
    echo "É Float!";
} else {
    echo "Não é Float!";
}

echo "<br>";
$b = 2 . 2;

if(is_string($b)) { 
    echo "É String!";
} else {
    echo "Não é String!";
}

$nome = "Maykon";
$sobrenome = "Fonseca";
echo "<br>";
$nomeCompleto = $nome . ' ' . $sobrenome;
echo $nomeCompleto;