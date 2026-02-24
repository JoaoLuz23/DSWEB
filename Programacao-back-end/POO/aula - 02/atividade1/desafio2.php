<?php

class Documento {
    private $numero;

    public function setNumero($numero) {
        
        $this->numero = preg_replace('/[^0-9]/', '', $numero);
    }

    public function getNumero() {
        return $this->numero;
    }
}

class CPF extends Documento {

    public function validar() {
        $cpf = $this->getNumero();

        // CPF precisa ter 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }

        // Rejeita CPFs com todos os números iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Validação do primeiro dígito verificador
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += $cpf[$i] * (10 - $i);
        }

        $resto = ($soma * 10) % 11;
        if ($resto == 10) {
            $resto = 0;
        }

        if ($resto != $cpf[9]) {
            return false;
        }

        // Validação do segundo dígito verificador
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += $cpf[$i] * (11 - $i);
        }

        $resto = ($soma * 10) % 11;
        if ($resto == 10) {
            $resto = 0;
        }

        if ($resto != $cpf[10]) {
            return false;
        }

        return true;
    }
}

// Teste

$cpf = new CPF();
$cpf->setNumero("529.982.247-25");

echo "CPF: " . $cpf->getNumero() . "<br/>";

if ($cpf->validar()) {
    echo "Resultado: CPF válido";
} else {
    echo "Resultado: CPF inválido";
}

?>
