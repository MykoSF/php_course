<?php

$a = "azul";
$b =& $a;

echo $a;
echo "<br>";
echo $b;
echo "<br>";

$a = "amarelo";

echo $a;
echo "<br>";
echo $b;
echo "<br>";

$b = "verde";

echo $a;
echo "<br>";
echo $b;
echo "<br>";