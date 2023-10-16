<?php

class PokerDice{

    //creacion de variables (caras del dado y ultima cara que ha salido)
    public $faces = ["As","K","Q","J","8","7"];
    public $lastThrow;
    public $totalThrows = 0;

    public function throw (){

    //lanzamiento del dado dentro de la función throw + numero de veces que se ha lanzado el dado
        $this->lastThrow = $this->faces[array_rand($this->faces)];
        $this->totalThrows++;
    }
    //funcion que nos dice el ultimo lanzamiento que ha salido
    public function shapeName(){
        return $this->lastThrow;

    }

    public function getTotalThrows(){
        return $this ->totalThrows;
    }

}
//creación de 5 dados

$dices = [];
for ($i = 0; $i<5; $i++){
    $dices [] = new PokerDice;
}

//lanzar cada uno de los dados
for ($i =0; $i< count($dices); $i++){
    $dices[$i]->throw();
    echo "Dado número ",($i+1), ":", $dices[$i]->shapeName(),"\n";
}

//total tiradas de TODOS los dados

$totalThrows = 0;
for ($i = 0; $i< count($dices); $i++){
    $totalThrows += $dices[$i]->getTotalThrows();
}
echo "Ha habido un total de ", $totalThrows," lanzamientos";

?>