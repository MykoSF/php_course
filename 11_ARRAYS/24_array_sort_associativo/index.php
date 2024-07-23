<?php

$arr = [
    'maykon' => 18,
    'cintia' => 17,
    'eduardo' => 15,
    'paulo' => 15,
];

asort($arr); //crescente por valor
print_r ($arr);
echo "<br>";
echo "<br>";

arsort($arr); //decrescente por valor
print_r ($arr);
echo "<br>";
echo "<br>";

ksort($arr); //crescente por chaves
print_r ($arr);
echo "<br>";
echo "<br>";

krsort($arr); //decrescente por chaves
print_r ($arr);
echo "<br>";
echo "<br>";


