 <?php

 abstract class Produto {
    public $nome = "";
    public $preco;
    public $estoque;

    public function calcularDesconto(){}
 }


 class eletronico extends produto {
    public function calcularDesconto() {
        if($this->estoque < 5) {
            return $this->preco * 0.19; 
        }
        return $this->preco * 0.1; 
    }
 }

    class roupa extends produto {
        public function calcularDesconto() {
            if($this->estoque < 5) {
                return $this->preco * 0.28; 
            }
            return $this->preco * 0.2; 
        }
    }

    $eletronico = new eletronico();
    $eletronico->nome = "Smartphone";
    $eletronico->preco = 1000;
    $eletronico->estoque = 3;
 
    echo "Produto: " . $eletronico->nome . "<br/>";
    echo "Preço: R$ " . $eletronico->preco . "<br />";
    echo "Desconto: R$ " . $eletronico->calcularDesconto() . "<br/>";
    echo "-------------------------<br/>";

   $roupa = new roupa();
    $roupa->nome = "Camisa";
    $roupa->preco = 100;
    $roupa->estoque = 10;

    echo "Produto: " . $roupa->nome . "<br/>";
    echo "Preço: R$ " . $roupa->preco . "<br />";
    echo "Desconto: R$ " . $roupa->calcularDesconto() . "<br/>";

?>
