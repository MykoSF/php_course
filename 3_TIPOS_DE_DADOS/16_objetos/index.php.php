<?php

    class Pessoa {

        function falar() {
            echo "Olá, mundo!";
        }

    }

    $maykon = new Pessoa();

    $maykon->nome = "Maykon";
    $maykon->idade = 18;

    echo $maykon->nome;
    echo '<br>';
    echo $maykon->idade;
    echo '<br>';
    $maykon->falar();
?>