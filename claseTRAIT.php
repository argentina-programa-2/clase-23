<!-- Un Trait es una característica de programación en algunos
 lenguajes orientados a objetos, como PHP, que permite la 
 reutilización de código en múltiples clases de una manera 
 que no es posible mediante la herencia simple.

Un Trait es una colección de métodos que pueden ser utilizados
 en diferentes clases. Proporciona una forma de compartir código 
 entre clases sin crear una relación de herencia. Esto es especialmente
  útil cuando deseas que varias clases tengan ciertos métodos comunes,
   pero no deseas forzar una estructura de herencia que no sea apropiada. -->
   <?php
//    codigo a compartir
   trait Color { protected $color; public function setColor($color) { $this->color = $color;}
    public function getColor() {return $this->color;}
}
class Bicicleta {
    use Color;    //utilizamos el termini use como si fuera una parte de una herencia pero el el funcionamoiento del trait
    protected $modelo;
    public function __construct($modelo) {$this->modelo = $modelo;}
    public function imprimir() {echo "Bicicleta: {$this->modelo}, Color: {$this->getColor()}" ; }
}
class Automovil {
    //utilizamos el termini use como si fuera una parte de una herencia pero el el funcionamoiento del trait
    use Color;    
    // / propiedades propias de la clase bicicleta
    protected $marca; 
    protected $modelo;
// constructor de la bicicleta
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    //obviamos el set y get entramos por el constructor  solo
    // seteamos eñ color del trait


    //sacamos por pantalla los datos    
    public function imprimir() {
        echo "Automóvil: {$this->marca} {$this->modelo}, Color: {$this->getColor()}";
    }
}
// Ejemplo de uso
echo "<br/>";
echo "<br/>";
$auto = new Automovil("Ford", "Ranger");
$auto->setColor("Violeta");
$auto->imprimir();
echo "<br/>";
echo "<br/>";
$bici = new Bicicleta("Venzo");//instanciamos la clase
$bici->setColor("Naranja");// seteamos el color
$bici->imprimir();//lo mostramos por pantalla

   ?>