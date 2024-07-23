<?php

$velocidade = 100;

if($velocidade < 40) {
    echo "Você está abaixo da velocidade permitida!";
} elseif($velocidade === 40) {
    echo "Você está no limite da velocidade permitida!";
} else {
    echo "Você ultrapassou o limite de velocidade!";
}