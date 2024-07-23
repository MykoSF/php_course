<?php
include_once "backend.php";
?>

<h1>Testando PHTML</h1>

<p><?= $nome ?> Itens abaixo:</p>
<br>
<h2>Lista de itens</h2>
<ul>
    <?php foreach($produto as $itens): ?>
        <li><?= $itens; ?></li>
    <?php endforeach; ?>
</ul>