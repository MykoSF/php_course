<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$numeros = count($array);

for ($start = 0; $start < $numeros; $start++) {
    if ($array[$start] % 2 == 0) {
        echo $array[$start] . " <=  número par <br>";
    }
}
?>
