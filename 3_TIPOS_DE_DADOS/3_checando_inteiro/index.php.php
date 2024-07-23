<?php

    if(is_int(5)) {
        echo "é um inteiro";
    } else echo "não é um inteiro";

    echo "<br>";

    if(is_int("não é inteiro")) {
        echo "é um inteiro";
    } else echo "não é um inteiro";

    echo "<br>";

    $inteiro = 5;

    if(is_int($inteiro)) {
        echo "é um inteiro";
    } else echo "não é um inteiro";

?>