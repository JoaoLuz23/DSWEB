<?php

class mouse {
    public $marca; 
    public $tipo;
    public $cor;
    public $dpi;
    public $formato

    public function clicar() { 
        return "O mouse da marca " . $this->marca . " está clicando.";
    }
    public function especificacoes() {
        return "Tipo: " . $this->tipo;
    }
    public function conectar() {
        return "o dpi do mouse é " . $this->dpi;
    }
}

$mouseSemfio = new mouse(); 
$mouseSemfio->marca = "Logitech ";
echo $mouseSemfio->clicar();

$mouseComfio = new mouse();
$mouseComfio->tipo = "Óptico ";
echo $mouseComfio->especificacoes();

$mouseGamer = new mouse();
$mouseGamer->dpi = "16000 ";
echo $mouseGamer->conectar();
?>