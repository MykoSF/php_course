<?php

class Humano {

    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstante() {
        echo self::BRACOS . "<br>";
    }
}

$maykon =  new Humano;
echo $maykon::OLHOS . "<br>";
$maykon->mostrarConstante();