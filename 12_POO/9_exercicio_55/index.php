<?php

class Carro {
    public $marca;
    public $velocidade_max;

    function setCarro($marca) {
        $this->marca = $marca;
        return $marca;
    }
    
    function setVelocidadeMax($velocidade_max) {
        $this->velocidade_max = $velocidade_max;
        return $velocidade_max;
    }

    function getVelocidadeMax() {
        return "A velocidade máxima do {$this->marca} é {$this->velocidade_max}!";
    }
}

$fiatUno = new Carro;
$fiatUno->setCarro("Fiat Uno");
$fiatUno->setVelocidadeMax("300 km/h");
echo $fiatUno->getVelocidadeMax();
