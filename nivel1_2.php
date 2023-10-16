<?php
//comentar
class Shape{

    public $ancho;
    public $alto;

    function initialize ($ancho, $alto){

        $this-> ancho = $ancho;
        $this-> alto = $alto;


    }
    

}

class Triangulo extends Shape{

    function areaTriangulo(){
        $area = ($this -> ancho * $this -> alto)/2;
        return $area;

    }

}

class Rectangulo extends Shape{
    
    function areaRectangulo(){
        $area = ($this -> ancho * $this -> alto);
        return $area; 

    }

}


$rectangulo = new Rectangulo;
$rectangulo->initialize(5, 7);

$triangulo = new Triangulo;
$triangulo->initialize(5, 7);

echo "Área del rectángulo: " . $rectangulo->areaRectangulo() . "\n";
echo "Área del triángulo: " . $triangulo->areaTriangulo() . "\n";
?>
?>