<?php

$dataNascimento = mktime(10,55,50,5,28,2006);
echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/y', $dataNascimento);
echo $dataNascimentoFormatada .  "<br";

//importante inserir de acordo com a necessidade, verificar documentação
