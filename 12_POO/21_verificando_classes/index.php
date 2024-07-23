<?php

class Humano {
    public $a;
    public $b;
    public $c;

    public function a(){
        
    }

    public function b(){

    }
}   

if(class_exists("Humano")) {
    echo "A classe Humano existe! <br>";
}  else {
    echo "A classe Humano não existe! <br>";
}

if(class_exists("A")) {
    echo "A classe A existe! <br>";
}  else {
    echo "A classe A não existe! <br>";
}

print_r(get_class_methods("Humano"));
echo "<br>";
print_r(get_class_vars("Humano"));