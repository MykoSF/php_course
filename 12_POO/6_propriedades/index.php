<?php

class Car {
    public $rodas = 4;
    public $aro = 18;
    public $cor = "Amarela";
}

$ferrari = new Car;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
echo $ferrari->cor . "<br>";

echo $ferrari->cor =  "Vermelha" . "<br>";