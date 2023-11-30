<?php

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ // acciones o metodos
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){

        echo "Hola soy: ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

$objAlumno = new persona(); // instancia o creacion de un objeto
$objAlumno->asignarNombre("Oscar"); // llamando un metodo


$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Pedro");


echo $objAlumno->nombre. "<br/>";
echo $objAlumno2->nombre. "<br/>";

echo $objAlumno->imprimirNombre(); // imprimir una propiedad
echo "<br/>";
echo $objAlumno2->mostrarEdad();


?>