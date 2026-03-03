<?php

class pessoa{
    public $nome;
    public $idade;
    
 public function __construct($nome, $idade){
        $this->nome = $novoNome;
        $this->idade = $novaIdade;
    }

    public function exibirDados(){
        return "Nome: " . $this->nome . "<br/>Idade: " . $this->idade;
    }   

    public function alterardados($novoNome, $novaIdade){
        $this->nome = $novoNome;
        $this->idade = $novaIdade;
    }
}


$pessoa = new pessoa("Sanches", 17);
echo $pessoa->exibirDados() . "<br/>";

$pessoa->alterardados("João", 25);
echo $pessoa->exibirDados() . "<br/>";  