<?php
//  <!-- Creación de una clase Factory
//  ● Crear una clase "Mascota" con las propiedades "nombre" y "edad".
//  ● Crear una clase "Perro" que herede de "Mascota" y tenga una propiedad
//  adicional "raza".
//  ● Crear una clase "Gato" que herede de "Mascota" y tenga una propiedad
//  adicional "pelaje" -->

class Mascota { 
    protected $nombre; 
    protected $edad;
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
}
//  Crear una clase "Perro" que herede de "Mascota" y tenga una propiedad
//  adicional "raza".
class perros extends Mascota { 
    protected $raza;
    public function __construct($nombre, $edad,$raza) {
        parent::__construct($nombre,$edad);
        $this->raza = $raza;

    }
    public function getRaza(){
        return $this->raza;
    }
}
//  ● Crear una clase "Gato" que herede de "Mascota" y tenga una propiedad
//  adicional "pelaje" -->
class Gato extends Mascota { 
    protected $pelaje;
    public function __construct($nombre, $edad,$pelaje) {
        parent::__construct($nombre,$edad);
        $this->pelaje = $pelaje;

    }
    public function getPelaje(){
        return $this->pelaje;
    }
}

// public function __construct($nombre, $edad,$raza) 
$perro = new perros("WILSON", "5","AMERICAN PITBULL TERRIER");
$gato = new gato("Leon", "4"," Blanco");
echo "<br/>";
echo "<br/>";
echo "El perro se llama ".$perro->getNombre()."  tiene ".$perro->getEdad()." años y su raza es ".$perro->getRaza();
echo "<br/>";
echo "<br/>";
echo "El gato se llama ".$gato->getNombre()." y tiene ".$gato->getEdad()." años y su pelaje es ".$gato->getPelaje();







?>
