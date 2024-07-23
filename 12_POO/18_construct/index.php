<?php

class Car {

    public $marca;
    public $modelo;
    public $cor;

    function __construct($marca, $modelo, $cor) {
        $this->marca = $marca;
        $this->moidelo = $modelo;
        $this->cor = $cor;
    }
}

$ferrari = new Car("Ferrari", "458", "Vermelho");
echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor! <?>";

