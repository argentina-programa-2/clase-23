<?php

////////////////////////////////////////////
//Punto N°1 Creación de una clase sencilla//
////////////////////////////////////////////
class Persona {
    // Propiedades:
    public $nombre;
    public $edad;
    public $email;

    // Constructor de la clase:
    public function __construct($nombre, $edad, $email) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }

    // Método para imprimir los datos en pantalla:
    public function getDatos() {
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Edad</th><th>Email</th></tr>";
        echo "<tr>";
        echo "<td>" . $this->nombre . "</td>"; // Cerré las etiquetas td correctamente
        echo "<td>" . $this->edad . "</td>";
        echo "<td>" . $this->email . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}

// Creación del objeto:
$persona_1 = new Persona("Jhonatan", 25, "JhonatanApellido@email.com");
// Llamando al método que imprime los datos
$persona_1->getDatos();
?>