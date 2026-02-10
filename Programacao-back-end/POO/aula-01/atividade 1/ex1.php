<?php

class computador {
    public $modelo; 
    public $marca;
    public $ano;
    public $processador;
    public $memoria;

    public function falar() { 
        return "Olá, meu computador é da marca " . $this->marca;
    }
    public function especificacoes() {
        return "Processador: " . $this->processador;
}
    public function ano() {
        return "O ano é " . $this-> ano;
    }
}

$computadorDell = new computador();
$computadorDell->marca = "Dell ";
echo $computadorDell->falar();


$computadorProf = new computador();
$computadorProf->processador  = "Intel Core i7 ";
echo $computadorProf->especificacoes();

$computadorAluno = new computador();
$computadorAluno->ano = "2020 ";
echo $computadorAluno->ano();




?>