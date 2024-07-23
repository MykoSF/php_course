<?php

function fala($nome, $idade) {
    if(is_string($nome) && is_int($idade)) {
        echo "Seu nome é $nome e você tem $idade anos!";
    } else {
        echo "Por favor, insira os dados de forma correta!";
    };
}

fala("Maykon", 18);