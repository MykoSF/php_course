<?php

class Gato {

    public $raca;
    public $nome;
    public $pelagem;

    function __construct($raca, $nome, $pelagem) {
        $this->raca = $raca;
        $this->nome = $nome;
        $this->pelagem = $pelagem;
    }
}

$linda = new Gato("Siamês", "Linda", "Bege e preto");
echo "A raça do gato é $linda->raca, o nome é $linda->nome e a pelagem é $linda->pelagem! <?>";

