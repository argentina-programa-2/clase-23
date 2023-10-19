<?php

abstract class FiguraGeometrica
{
    abstract public function calcularArea();
}

class Cuadrado extends FiguraGeometrica
{
    private $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }
}

class Triangulo extends FiguraGeometrica
{
    private $base;
    private $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea()
    {
        return (($this->base * $this->altura) / 2);
    }
}


$triangulo = new Triangulo(5, 3);

echo "Area de Triangulo: " . $triangulo->calcularArea() . "<br>";

$cuadrado = new Cuadrado(5);

echo "Area de Cuadrado: " . $cuadrado->calcularArea();
