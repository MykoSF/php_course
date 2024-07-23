<?php

$global = "Fala global";

function Falar() {
    $local = "Fala local";
    echo $local;
}

$local = "Fala local, alterada";

echo $global;
echo "<br>";
Falar();
echo "<br>";
echo $local;