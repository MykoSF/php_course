<?php

$maykon = "primeiro nome";
$santana = "segundo nome";
$fonseca = "terceiro nome";

$pessoa  = compact("maykon", "santana", "fonseca");

foreach($pessoa as $tipoNome => $valor) {
    echo "$tipoNome: $valor <br>";
} 
