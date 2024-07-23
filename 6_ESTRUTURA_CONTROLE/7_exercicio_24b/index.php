<?php

function imc($altura, $peso) {
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC é: ". $imc . "<br>";
    if($imc < 18.5) {
        echo "Você está abaixo do peso ideal!";
    } elseif($imc >= 18.5 && $imc < 25) {
        echo "Você está no peso normal!";
    } elseif($imc >= 30 && $imc < 35) {
        echo "Você está no com obesidade!";
    } else {
        echo "Você está com obesidade extrema!";
    }
};

imc(1.85, 66);
