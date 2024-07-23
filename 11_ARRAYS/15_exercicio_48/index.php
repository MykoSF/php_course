<?php

$itens = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

$cortar = array_splice($itens, 2, 2);
print_r($cortar);
echo "<br>";
print_r($itens);
