<?php

$a = 0;

while($a < 150) {
    $a += 10;
    echo $a . "<br>";
}

$b = 150;

while($b > 0) {
    $b -= 10;
    echo $b . "<br>";
}

echo "<br>";

$c = 100;

while($c > 0) {
    if($c % 2 == 0) {
        echo $c . "<br>";
    }
    $c--;
}