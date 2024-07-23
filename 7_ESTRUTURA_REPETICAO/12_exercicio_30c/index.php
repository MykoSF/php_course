<?php

$array = [];

for($i = 10; $i <= 20; $i++ ) {

    array_push($array, $i);

    if($i %2 != 0) {
        echo "Impar $i <br>";
    }
}
