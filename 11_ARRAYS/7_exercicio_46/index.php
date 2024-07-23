<?php

$array = [
    [1,2,3,4],
    [1,2,3,4], 
    [1,2,3,4]
];

for($i = 0; $i < count($array); $i++) {

    echo "Imprimindo Array externo:" . " " . ($i + 1) . "<br>";

    for($j = 0; $j < count($array[$i]); $j++) {
        echo $array[$i][$j] . "<br>";
    }
}