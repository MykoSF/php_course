<?php

class Humano {
    public function a() {

    }
}

$maykon = new Humano;
$a = [];

if(is_object($maykon)) {
    echo "é objeto! <br>";
} else {
    echo "não é um objeto! <br>";
}

if(is_object($a)) {
    echo "é objeto! <br>";
} else {
    echo "não é um objeto! <br>";
}

echo get_class($maykon) . "<br>";

if(method_exists($maykon, "a")) {
    echo "método existe! <br>";
} else {
    echo "método não existe! <br>";
}

if(method_exists($maykon, "b")) {
    echo "método existe! <br>";
} else {
    echo "método não existe! <br>";
}