<?php

class Pessoa {
    public $nome = "Sanches";
    protected $idade = 17;
}

class Funcionario extends Pessoa {
    public $salario = 1500;
}

class Gerente extends Funcionario {
    public $departamento = "Vendas";

    public function mostrarDados() {
      
        echo "Departamento: " . $this->departamento . "<br/>";
        echo "Salário: " . $this->salario . "<br/>";
        echo "Bônus: " . ($this->salario * 0.20) . "<br/><br/>";
    }
}

class Desenvolvedor extends Funcionario {
    public $linguagem = "PHP";

    public function mostrarDados() {
       
        echo "Linguagem: " . $this->linguagem . "<br/>";
        echo "Salário: " . $this->salario . "<br/>";
        echo "Bônus: " . ($this->salario * 0.10) . "<br/><br/>";
    }
}


$gerente = new Gerente();
$dev = new Desenvolvedor();

$gerente->mostrarDados();
$dev->mostrarDados();

?>
