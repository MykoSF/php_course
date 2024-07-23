<?php

$array =  [10,20,30,40,50,60,70,80,90,100];
$i = 0;

while($i < count($array)) {
    $atual = $array[$i];

    if($atual == 30 || $atual == 40) {
    $i++;
    continue;
    }

    echo "Executando o loop $atual <br>";
    $i++;
}