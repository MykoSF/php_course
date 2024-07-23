<?php

class Pessoa {
    public $idade;
    public $nome;

    function andar($metros) {
        echo "Andou $metros metros! <br>";
    }
}

$maykon = new Pessoa;

echo $maykon->idade = 18 . "<br>";
echo $maykon->nome = "Maykon <br>";
echo $maykon->andar(20);