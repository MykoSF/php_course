<?php

$array = range(1, 10);
print_r($array);
echo "<br>";

$cortar = array_splice($array, 0,4);
print_r($cortar);
echo "<br>";

$array1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
print_r($array1);
echo "<br>";

$cortar1 = array_splice($array1, 0,10);
print_r($cortar1);
echo "<br>";
