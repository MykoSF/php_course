<?php

$a = 10;
$b = 20;

if($a < $b) {
    echo "A é menor que B, porém isso irá mudar! <br> <br>";
    while($a < $b) {
        $b--;
        echo $b . "<br> ";
    }

}

echo "<br>";
echo "Agora o valor de A é: " .  $a;
echo "<br>";
echo "E o valor de B é: " .  $b;

