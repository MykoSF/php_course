<?php
    $ano_atual = 2024;

    $maykon = [
        'nome' => 'Maykon',
        'sobrenome' => 'Santana Fonseca',
        'ano_nascimento' => 2006
    ];

    if($ano_atual - $maykon['ano_nascimento'] >= 18) {
        echo $maykon['nome']. ', de sobrenome: ' .$maykon['sobrenome']. ' é maior de idade';
    };
?>
