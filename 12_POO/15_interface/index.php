<?php

interface Caracteristicas {

    const nome = "Maykon";

    public function falar();
}

class Humano implements Caracteristicas {

    public $idade = 20;

    public function falar() {
        echo "Olá, mundo! <br>";
    }

    public function dizerNome() {
        echo "Meu nome é " . self::nome . "<br>";
    }
}

$maykon = new Humano;
$maykon->falar();
$maykon->dizerNome();