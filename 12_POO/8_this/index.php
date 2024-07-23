<?php

class Animal {

    public $nome;

    function escolherNome($nome) {
        $this->nome = $nome;
    }
}

$linda = new Animal;

$linda->escolherNome("Linda");
echo $linda->nome;