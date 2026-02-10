<?php

class estojo {
    public $marca; 
    public $cor;
    public $material;
    public $tamanho;
    public $compartimentos;

    public function abrir() { 
        return "O estojo da marca " . $this->marca . " está aberto.";
    }
    public function especificacoes() {
        return "A cor é " . $this->cor;
    }
    public function material() {
        return "O estojo é de " . $this->material;
    }
}



$meuEstojo = new estojo();
$meuEstojo->marca = "Faber Castell ";
echo $meuEstojo->abrir();

$estojoAluno = new estojo();
$estojoAluno->cor = "Azul ";
echo $estojoAluno->especificacoes();


$estojoProf = new estojo();
$estojoProf->material = "Couro ";
echo $estojoProf->material();




?>