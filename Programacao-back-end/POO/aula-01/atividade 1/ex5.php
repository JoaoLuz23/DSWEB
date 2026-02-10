<?php

class lousa {
    public $marca; 
    public $cor;
    public $tamanho;
    public $material;
    public $tipo;

    public function escrever() { 
        return "A lousa da marca " . $this->marca . " está sendo escrita.";
    }
    public function especificacoes() {
        return "Cor: " . $this->cor;
    }
    public function tipo() {
        return "A lousa é do tipo " . $this->tipo;
    }
}

$lousaSala = new lousa();
$lousaSala->marca = "Quartzo ";
echo $lousaSala->escrever();

$lousaPortatil = new lousa();
$lousaPortatil->cor = "Branca ";
echo $lousaPortatil->especificacoes();    

$lousaBranco = new lousa();
$lousaBranc->tipo = "Caneta ";
echo $lousaBranco->tipo();

?>