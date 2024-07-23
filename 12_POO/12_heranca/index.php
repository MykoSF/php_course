<?php

class Humano {
    public $idade = 10;
    private function falar() {
        echo "olá! <br>";
    }
    public function acessarFalar() {
        $this->falar();
    }
}

class Programador extends Humano {

}

$maykon = new Programador;
$maykon->acessarFalar();

