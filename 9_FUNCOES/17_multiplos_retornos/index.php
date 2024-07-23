<?php


function AltrarDados($nome, $idade) {
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
};

$dados = AltrarDados("Maykon", 18);
echo "Olá $dados[0], você tem $dados[1] anos!";