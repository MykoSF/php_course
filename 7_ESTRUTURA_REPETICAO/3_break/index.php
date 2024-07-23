<?php   

$x = 0;

while($x < 10) {

    echo "O X é igual à: $x <br>";

    if($x === 7) {
        echo "Término! <br>";
        break;
    }

    $x++;
}

echo "Fim da sequência!";