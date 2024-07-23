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
        echo "Está lecionando: $this->disciplina! <br>";
    }
}

$maykon = new Professor;

$maykon->setIdade(18);
echo $maykon->getIdade();

$maykon->setLecionar("Português");
echo $maykon->getLecionar();


if($maykon instanceof Humano) {
    echo "Maykon é humano! <br>";
} else {
    echo "Maykon não é humano! <br>";
}


if($maykon instanceof Professor) {
    echo "Maykon é Professor! <br>";
} else {
    echo "Maykon não é Professor! <br>";
}