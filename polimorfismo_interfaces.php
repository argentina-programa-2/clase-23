<?php
///////////////////////////////////////
//Punto N°3 POLIMORFISMO E INTERFACES//
//////////////////////////////////////

//CREACION DE LA INTERFAS
interface iVehiculo {
    public function acelerar();
    public function frenar();
}

//CREACION CLASE AUTOMOVIL
class Automovil implements iVehiculo {
    // Propiedades
    public $acelerando;
    public $frenando;
    public $velocidad;

    // Constructor de clase
    public function __construct() {
        $this->acelerando = false;
        $this->frenando = false;
        $this->velocidad = 0;
    }

    // Métodos y uso de los métodos de la interfaz
    public function acelerar() {
        if ($this->velocidad < 100) {
            $this->acelerando = true;
            $this->frenando = false;
            $this->velocidad += 10;
        } else {
            echo "La velocidad máxima es 100 km/h, no se puede acelerar más.";
            $this->acelerando = false;
        }
    }

    public function frenar() {
        if ($this->velocidad >= 10) { 
            $this->acelerando = false;
            $this->frenando = true;
            $this->velocidad -= 10;
        } else {
            echo "El auto ya está parado, no se puede frenar más.";
            $this->frenando = false;
        }
    }

    public function getDatos() {
        echo "EL auto está yendo a " . $this->velocidad . " km/h.<br>";

        if ($this->acelerando) {
            echo "El auto está acelerando actualmente.<br>";
        } elseif ($this->frenando) {
            echo "El auto está frenando en este momento.<br>";
        } elseif ($this->velocidad == 0) {
            echo "El auto está detenido.<br>";
        }
    }
}

//CREACION CLASE BICICLETA
class Bicicleta implements iVehiculo {
    // Propiedades
    public $acelerando;
    public $frenando;
    public $velocidad;

    // Constructor de clase
    public function __construct() {
        $this->acelerando = false;
        $this->frenando = false;
        $this->velocidad = 0;
    }

    // Métodos y uso de los métodos de la interfaz
    public function acelerar() {
        if ($this->velocidad < 40) {
            $this->acelerando = true;
            $this->frenando = false;
            $this->velocidad += 10;
        } else {
            echo "Lo lamento pero no te dan pas piernas para acelerar mas.";
            $this->acelerando = false;
        }
    }

    public function frenar() {
        if ($this->velocidad >= 10) { 
            $this->acelerando = false;
            $this->frenando = true;
            $this->velocidad -= 10;
        } else {
            echo "La bici ya está parada, no se puede frenar más.";
            $this->frenando = false;
        }
    }

    public function getDatos() {
        echo "La Bici está yendo a " . $this->velocidad . " km/h.<br>";

        if ($this->acelerando) {
            echo "La bici está acelerando actualmente.<br>";
        } elseif ($this->frenando) {
            echo "La bici está frenando en este momento.<br>";
        } elseif ($this->velocidad == 0) {
            echo "La bici está detenida.<br>";
        }
    }
}

// CREACION OBJETOS
$auto = new Automovil();
$bici = new Bicicleta();

// PRUEBAS
$auto->acelerar();
$auto->getDatos();
$auto->frenar();
$auto->getDatos();

$bici->acelerar();
$bici->getDatos();
$bici->frenar();
$bici->getDatos();
