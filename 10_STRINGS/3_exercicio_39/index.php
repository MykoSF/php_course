<?php


$array = ['carro' => 100000, 'casa' => 500000, 'moto' => 20000];

function iternCaros($array) {
    $arrItensCaros = [];

    foreach ($array as $item => $preco) {
        if($preco > 20000) {
            array_push($arrItensCaros, $item);
            }
        }
    return $arrItensCaros;
}

$novoArray = iternCaros($array);

print_r($novoArray);