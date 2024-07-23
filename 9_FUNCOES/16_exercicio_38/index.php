<?php

function mercado($itens) {
    $listaMercado = implode(", ", $itens);
    return $listaMercado;
}


$lista = mercado(["Arroz", "Feijão"]);
echo $lista;