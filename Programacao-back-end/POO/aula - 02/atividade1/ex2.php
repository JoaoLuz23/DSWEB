<?php
class Animal {
public function fazerSom(){

return "Som";
}
public function mover(){
return "Anda";
}
}
class Sapo extends Animal {
public function fazerSom(){
return "coaxa";
}
}
class Cavalo extends Animal {
public function fazerSom(){
return "Relincha";
}
public function mover(){
return "Galopa e " . parent::mover();
}   
}

class Tartaruga extends Animal {
public function fazerSom(){
return "grunhe";
}
}

$sapinho = new Sapo();

echo $sapinho->fazerSom() . "<br/>";
echo $sapinho->mover() . "<br/>";
echo "-------------------------<br/>";
$spirit = new Cavalo();
echo $spirit->fazerSom() . "<br/>";
echo $spirit->mover() . "<br/>";
echo "-------------------------<br/>";
$crush = new Tartaruga();
echo $crush->fazerSom() . "<br/>";
echo $crush->mover() . "<br/>";
?>