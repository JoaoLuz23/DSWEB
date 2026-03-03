<?php

class artista{
    public $nome;
    public $genero;
}

class musica {
    public $titulo;
    public $duracao;
    public artista $artista;

    public function __construct($titulo, $duracao, artista $artista){
        $this->titulo = $titulo;
        $this->duracao = $duracao;
        $this->artista = $artista;
    }

    public function exibirDados(){
        return "Título: " . $this->titulo . "<br/>Duração: " . $this->duracao . "<br/>Artista: " . $this->artista->nome . "<br/>Gênero: " . $this->artista->genero;
     }
}

$artista = new artista();
$artista->nome = "Sanches";
$artista->genero = "Pop";
$musica = new musica("Minha Música", "3:45", $artista);
echo $musica->exibirDados() . "<br/>";



?>