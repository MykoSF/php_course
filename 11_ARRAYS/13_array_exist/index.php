<?php

$carro = [
    'blank' => 21,
    'blank1' => 21,
    'blank2' => 21,
    'blank3' => 21,
    'blank4' => 21,
    'blank5' => 21
];

$arrayKey = array_key_exists("blank", $carro);
print_r($arrayKey);
echo "<br>";

if(isset($carro['blank'])) {
    echo "Sim";
}