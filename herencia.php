<?php
//////////////////////
//Punto N°2 Herencia//
/////////////////////

//Primero pongo la clase persona de nuevo para poder heredarla despues.
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

//Ahora se crea la clase Empleado que hereda Persona
class Empleado extends Persona{
    //Propiedades
    public $puesto;

    //constructor de clase
    public function __construct($nombre, $edad, $email, $puesto){
        parent::__construct($nombre, $edad, $email);
        $this->puesto =$puesto;
    }

    //metodo para imprimir los datos
    public function getDatosEmpleado(){
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Edad</th><th>Email</th><th>Puesto</th></tr>";
        echo "<tr>";
        echo "<td>" . $this->nombre . "</td>";
        echo "<td>" . $this->edad . "</td>";
        echo "<td>" . $this->email . "</td>";
        echo "<td>" . $this->puesto . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}

//Creacion de objeto empleados:
$empleado_1= new Empleado("Jose",38,"jose@mail.com","Ventas");
//llamo al metodo para imprimir los datos
$empleado_1->getDatosEmpleado();
?>