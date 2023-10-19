<?php
error_reporting(E_ALL);
class ConexionDB
{
    private static $instancia = null;
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $db = "api";
    private $conexion;

    private function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->db);

        if ($this->conexion->connect_error) {
            die('Error de conexión: ' . $this->conexion->connect_error);
        }
    }

    // Método estático para obtener la instancia única de la clase.
    public static function obtenerInstancia()
    {
        if (self::$instancia === null) {
            self::$instancia = new ConexionDB();
        }
        return self::$instancia;
    }

    public function getConexion()
    {
        return $this->conexion;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

$conexion = ConexionDB::obtenerInstancia();

$db = $conexion->getConexion();

$res = $db->query("SELECT * FROM productos");
$productos = [];
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $productos[] = $row;
    }
}
var_dump($productos);

$conexion->getConexion()->close();
