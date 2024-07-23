<?php

$fType = ["jaguar", 3.0, "azul", 2018, "teto solar", "autormático"];
print_r($fType);
echo "<br>";

list($carro, $motor, $cor, $ano, $teto, $cambio) = $fType;

echo $carro . "<br>";
echo $motor . "<br>";
echo $cor . "<br>";
echo $ano . "<br>";
echo $teto . "<br>";
echo $cambio . "<br>";