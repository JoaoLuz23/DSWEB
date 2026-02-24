<?php

class Veiculo{
    public $modelo;
    public $marca;
}

class Carro extends Veiculo{

    public function acelerarPedal(){
        return "Acelerando com o pedal";
    }

    public function definirVelocidade(){
        return "100 km/h";
    }
}

class Moto extends Veiculo{

    public function acelerarManete(){
        return "Acelerando com a manete";
    }

    public function definirVelocidade(){
        return "80 km/h";
    }
}

$carro = new Carro();
$carro->modelo = "Onix";
$carro->marca = "Chevrolet";

echo "Modelo: " . $carro->modelo . "<br/>";
echo "Marca: " . $carro->marca . "<br/>";
echo $carro->acelerarPedal() . "<br/>";
echo $carro->definirVelocidade() . "<br/>";
echo "-------------------------<br/>";

$moto = new Moto();
$moto->modelo = "CB 500";
$moto->marca = "Honda";

echo "Modelo: " . $moto->modelo . "<br/>";
echo "Marca: " . $moto->marca . "<br/>";
echo $moto->acelerarManete() . "<br/>";
echo $moto->definirVelocidade() . "<br/>";

?>
