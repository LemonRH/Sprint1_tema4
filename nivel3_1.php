
<?php

class pelicula{
    //variables necesarias en clase pelicula
    public $nombre;
    public $duracion;
    public $director;

    //constructor de las variables que se encuentran en pelicula
    public function __construct($nombre, $duracion,$director){

        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
        
    }
    //getters

    public function getNombre(){
        return $this->nombre;
    }

    public function getDuracion(){
        return $this->duracion;
    }

    public function getDirector(){
        return $this->director;
    }
}

class cine{
    public $nombre;
    public $poblacion;
    public $peliculas;
    //constructor dos primeras variables, la tercera será un array, por lo que crearemos una función para añadir información a éste
    public function __construct($nombre, $poblacion){
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
    }
    public function agregarPelicula(Pelicula $pelicula){
        $this->peliculas[]= $pelicula;//ahora la variable pelicula será un array al añadirle peliculas 
    }

    //funciones que pide el ejercicio (mostrar datos de cada pelicula en cada cine, mostrar la pelicula con mas duración y buscar por nombre de director en diferentes cines)

    public function mostrarPeliculas (){
        echo "Peliculas que hay en el cine  {$this->nombre} ({$this->poblacion}):";
        //bucle para mostrar todas las peliculas
        foreach($this->peliculas as $pelicula){
            echo $pelicula->getNombre(), " duracion: ", $pelicula->getDuracion()," minutos y director: ", $pelicula->getDirector(). PHP_EOL;
        
        }
    }

    public function obtenerPeliculaMasLarga(){
        $peliculaMasLarga = null; //variable vacia para despues añadir la pelicula mas larga al terminar de compararlas
        $duracionMax = 0;
        //bucle para comparar duracion de peliculas
        foreach ($this->peliculas as $pelicula){
            if ($pelicula->getDuracion()> $duracionMax){ //si pelicula duracion es mas grande que la duracion maxima, cambiamos el nombre
                $duracionMax =$pelicula->getDuracion();
                $peliculaMasLarga = $pelicula;
            }
        }
        return $peliculaMasLarga;
    }

}
//crear peliculas, cines y añadir estas peliculas a los cines
$pelicula1 = new pelicula('UP', 175, 'Disney');
$pelicula2 = new pelicula('Pulp Fiction', 142, 'Quentin Tarantino');
//cine 1 con pelicula1 añadida y lo mismo para cine2
$cine1 = new cine('filmax', 'barcelona');
$cine1->agregarPelicula($pelicula1);

$cine2 = new cine('cinesa', 'barcelona');
$cine2->agregarPelicula($pelicula2);
//mostrar peli de cada cine
$cine1->mostrarPeliculas();
$cine2->mostrarPeliculas();
//pelicula mas larga por cada cine (solo hay añadido una pelicula por cine pero en caso de añadir más deberioa funcionar)
echo "Pelicula mas larga en filmax barcelona: ", $cine1->obtenerPeliculaMasLarga()->getNombre() .PHP_EOL;
echo "Pelicula mas larga en cinesa barcelona: ", $cine2->obtenerPeliculaMasLarga()->getNombre();


?>
