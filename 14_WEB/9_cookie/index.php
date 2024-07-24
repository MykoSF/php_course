<?php

setcookie("nome", "Maykon", time() +3600);

if(isset($_COOKIE['nome'])) {

    $nome = $_COOKIE['nome'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($nome !== ""): ?>
        <p>Seja bem-vindo <?= $nome ?></p>
    <? endif;  ?>   
    <h2>Olá, mundo!</h2> 
</body>
</html>