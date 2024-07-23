<?php

trait Humano {
    public $idade;
    public $nome;
    
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return "A idade é $this->idade! <br>";
    }
}

class Professor {
    use Humano;
}

$maykon = new Professor;
$maykon->setIdade(17);
echo $maykon->getIdade();
