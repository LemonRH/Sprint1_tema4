<?php
//comentar
class Employee {

    private $nombre;
    private $sueldo;
    


    function initialize ($nombre, $sueldo){

        $this-> nombre = $nombre;
        $this-> sueldo = $sueldo;

    }

    function print(){

        if ($this -> sueldo > 6000){
            echo $this -> nombre, " debe pagar impuestos ya que cobra más de 6000 euros(", $this -> sueldo,"€)";
        }else{
            echo $this -> nombre, "no debe pagar impuestos ya que cobra menos de 6000 euros (", $this -> sueldo,"€)";
        }


    }

}

$empleado = new Employee;

$empleado -> initialize("Paco", 8750);

$empleado ->print();

?>