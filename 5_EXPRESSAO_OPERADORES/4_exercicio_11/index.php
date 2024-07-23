<?php

$string = "5";
$int = 12;

$expressao = $string * $int;
echo $expressao;
echo "<br>";
echo gettype($expressao);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12312.23123);
echo "<br>";
echo gettype("EITA!");