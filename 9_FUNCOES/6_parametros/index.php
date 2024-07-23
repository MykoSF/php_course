<?php

function velocidade($vel) {
    if(is_int($vel)) {
        echo "O Carro atinge a velocidade máxima $vel km/h";
    } else {
        echo "Por favor, insira um número inteiro";
    };
}

velocidade(2);

echo "<br>";

function pet($nome, $raca) {
    if(is_string($nome) && is_string($raca)) {
        echo "O nome do animal é $nome e a sua raça é $raca!";
    } else {
        echo "Por favor, insira o nome de forma correta!";
    };
}

pet("Gato", "Preto");
