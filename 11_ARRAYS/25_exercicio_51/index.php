<?php
$arr = [
    'Maykon' => 18,
    'Cintia' => 17,
    'Eduardo' => 16,
    'Paulo' => 18,
];
arsort($arr); //crescente por valor
echo "<br>";
?>

<table border='10'> 
    <th>Nome</th>
    <th>Pontos</th>
<?
foreach($arr as $tipoNome => $valor) {
    echo 
    "<tr>
        <td>$tipoNome </td>
        <td>$valor </td>
    </tr>";
}
?>
</table>

<h3>Lista de pontuação:</h1>
    <ol>
        <?php foreach($arr as $Nome => $pontos): ?>
            <li> <?= "Nome: $Nome - Pontuação: $pontos"; ?> </li>
        <?php endforeach; ?>
    </ol>