<?php

$maykon = 18;
$eduardo = 17;
$cintia = 17;
$paulo = 17;

$pessoa  = compact("maykon", "eduardo", "cintia", "paulo");
?>

<table border='10'> 
    <th>Nome</th>
    <th>Idade</th>
<?
foreach($pessoa as $tipoNome => $valor) {
    echo 
    "<tr>
        <td>$tipoNome </td>
        <td>$valor </td>
    </tr>";
}
?>
</table>


