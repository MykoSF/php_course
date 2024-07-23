<?php

$pessoa = new Class {
    public $nome =  "Maykon";

    public function dizerNome() {
        echo "olá meu nome é $this->nome";
    }
};

$pessoa->dizerNome();