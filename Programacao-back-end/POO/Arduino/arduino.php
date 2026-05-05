<?php

class lampada {
    private $led

    public function __construct($led) {
        $this-$led = $led;
    }


$cmd = "echo" . $comando . " > " .$this->$led;
exec($cmd);

}

public function ligar() {
    $this->enviarComando("ligar");
}

public function desligar() {
    $this->enviarComando("desligar");
}

public function piscar() {
    $this->enviarComando("piscar")
}




?>