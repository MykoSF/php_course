<?php

if(isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "Não encontrado!";
    $idade = "Não encontrado!";
}

?>

<h1>O seu nome é <?= $nome ?> e sua idade <?= $idade ?></h1>