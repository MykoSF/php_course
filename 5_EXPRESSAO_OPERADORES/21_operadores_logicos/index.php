<?php

$a =  1;
$b = "1";

if(is_int($a && $b)) {
    echo "Os dois são ints!";
} else {
    echo "algum dos dois não é int!";
}

echo "<br>";

if(is_int($a || $b)) {
    echo "Algum dos dois é int!";
} else {
    echo "Nenhum dos dois é int!";
}

echo "<br>";

if(is_int(!$b)) {
    echo "É um int!";
} else {
    echo "Não é um int!";
}