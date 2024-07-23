<?php

$arr = [21,31231,54262,41735,22642,6252];

sort($arr);

print_r($arr);


echo "<br>";
$arr1 = [21,31231,54262,41735,22642,6252];
rsort($arr);

print_r($arr);

//este metodo ultilizando nomes com tio nao funciona direito, pois o A com tio vai parar em posicao pos alfabeto;