<?php

$arr = [];

for($i = 0; $i < 30; $i++){
    array_push($arr, $i);
};

function higherThan7($array) {
    $arrayRetorno = [];

    for($i = 0; $i < count($array); $i++) {
        if($array[$i] > 7) {
            array_push($arrayRetorno, $array[$i]);
        }
    }
    return $arrayRetorno;
}

$novaArray = higherThan7($arr);
print_r($novaArray);