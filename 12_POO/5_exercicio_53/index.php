<?php

class Cachorro {
    function latir() {
        echo "Au! <br>";
    }

    function uivar() {
        echo "Auuuuuuuuuuuuuuuuuu! <br>";
    }
}

$dog1 = new Cachorro;
$dog2 = new Cachorro;

$dog1->latir();
$dog2->uivar();