<?php

class Humano {
    public $idade;
    public $nome;
    
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return "A idade é $this->idade! <br>";
    }


}

class Professor extends Humano {
    public $disciplina;

    public function setLecionar($disciplina) {
        $this->disciplina = $disciplina;
    }

    public function getLecionar() {
        echo "Está lecionando $this->disciplina! <br>";
    }
}

$maykon = new Professor;
$maykon->setIdade(17);
echo $maykon->getIdade();


$maykon->setLecionar("Português");
echo $maykon->getLecionar();
