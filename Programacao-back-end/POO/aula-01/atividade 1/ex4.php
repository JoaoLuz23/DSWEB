<?php

class arvore {
    public $especie; 
    public $altura;
    public $idade;
    public $corFolha;
    public $tipoSolo;

    public function descrever() { 
        return "Esta árvore é da espécie " . $this->especie;
    }
    public function ambiente() {
        return "Cor da Folha: " . $this->corFolha;

    }
    public function crescer() {
        return "A Idade da arvore é " . $this->idade;
    }
}

$arvoreFrutas = new arvore();
$arvoreFrutas->especie = "Manga ";
echo $arvoreFrutas->descrever();

$arvoreFolhagem = new arvore();
$arvoreFolhagem->corFolha = "Verde ";
echo $arvoreFolhagem->ambiente();

$arvoreAntiga = new arvore();
$arvoreAntiga->idade = "100 anos ";
echo $arvoreAntiga->crescer();

?>