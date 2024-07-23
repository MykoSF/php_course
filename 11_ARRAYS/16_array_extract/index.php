<?php

$array = [
    'maykon' => "primeiro nome" , 
    'santana' => "segundo nome",
    'fonseca' => "terceiro nome"
];

extract($array);

echo $maykon . "<br>";
echo $santana . "<br>";
echo $fonseca . "<br>";