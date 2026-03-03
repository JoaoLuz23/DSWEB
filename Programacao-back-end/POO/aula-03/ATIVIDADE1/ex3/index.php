<?php

class Fabricante {
    public $nome;
    public $pais;
}

class Motor {
    public $potencia;
    public $combustivel;
}

class Carro {
    public $modelo;
    public $marca;
    public $ano;
    public Fabricante $fabricante;
    public Motor $motor;

    public function exibirDados() {
        return "Modelo: " . $this->modelo . "<br/>Marca: " . $this->marca . "<br/>Ano: " . $this->ano . "<br/>Fabricante: " . $this->fabricante->nome . "<br/>País do fabricante: " . $this->fabricante->pais . "<br/>Potência do motor: " . $this->motor->potencia . "<br/>Combustível do motor: " . $this->motor->combustivel;
    }
}

$fabricante = new Fabricante();
$fabricante->nome = "Chevrolet";
$fabricante->pais = "Estados Unidos";

$motor = new Motor();
$motor->potencia = "150 cv";
$motor->combustivel = "Gasolina";

$carro = new Carro();
$carro->modelo = "Onix";
$carro->marca = "Chevrolet";
$carro->ano = 2020;
$carro->fabricante = $fabricante;
$carro->motor = $motor;

echo $carro->exibirDados();

?>
 