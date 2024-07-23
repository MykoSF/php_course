<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataA->setDate(2006,05,28);

if($dataA > $dataB) {
    echo "A data A é maior que a data B <br>";
} else {
    echo "A data A é menor que a data B <br>";
}
if($dataB == $dataC) {
    echo "As datas são iguais";
} else {
    echo "As datas não são iguais";
}

/*a operacao de comparacao nao funciona se for utilizar o 
datetime como objeto de valor, a comparacao so ira funcionar 
caso todo o valor da variavel seja estatico */ 