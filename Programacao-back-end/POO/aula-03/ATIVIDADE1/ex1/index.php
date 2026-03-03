
<?php

class Dono {

    public string $nome;
    public string $telefone;

    public function __construct(string $nome, string $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }
}

class Animal {
    public string $nome;
    public string $especie;
    public Dono $dono;

    public function __construct(string $nome, string $especie, Dono $dono) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->dono = $dono;
    }
}

$dono = new Dono("Sanches", "123456789");
$animal = new Animal("Rex", "Cachorro", $dono);
echo "Nome do animal: " . $animal->nome . "<br/>";
echo "Espécie: " . $animal->especie . "<br/>";
echo "Dono: " . $animal->dono->nome . "<br/>";
echo "Telefone do dono: " . $animal->dono->telefone . "<br/>";

?>