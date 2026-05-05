<?php

class lampada {

    private $porta;

    public function __construct($porta = "COM4") {
        $this->porta = $porta;
    }

    private function enviar($modo) {
        shell_exec("echo $modo > {$this->porta}");
    }

    public function executar($modo) {
        $this->enviar($modo);
        return "Modo enviado: " . $modo;
    }
}

if(isset($_POST['modo'])){

    $modo = $_POST['modo'];

    $controle = new lampada ("COM4");


    echo $controle->executar($modo);
}

?>

<br>
<br>

<center>

<h1>STATUS<H1>
<br> 

 

<form method="post">    
<button name="modo" value="ligar">Ligar</button>
<button name="modo" value="desligar">Desligar</button>
<button name="modo" value="piscar">Piscar</button>
</form>

<center>