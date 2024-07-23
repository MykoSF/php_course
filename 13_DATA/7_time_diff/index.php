<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2000,12,31);
print_r($dataB);

$diferenca = $dataA->diff($dataB);
print_r($diferenca);