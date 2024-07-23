<?php

$array = [1,23,4,5,6];
print_r ($array);
echo "<br>";

$slice = array_slice($array, 0,1);
print_r ($slice);
echo "<br>";

$slice = array_slice($array, 0);
print_r ($slice);
echo "<br>";

$slice = array_slice($array, 0, -2);
print_r ($slice);
echo "<br>";

