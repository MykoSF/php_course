<?php   

$inicio = 4;

while($inicio < 30) {
    echo $inicio . "<br>";
    if($inicio === 24) {
        echo "Fim da sequência, número atingido!";
        break;
    }
    $inicio += 2;
}