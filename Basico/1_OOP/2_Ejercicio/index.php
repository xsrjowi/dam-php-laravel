<?php

namespace SegundoEjercicio
{

    require_once("DosDimensiones.php");
    require_once("Cuadrado.php");
    require_once("Triangulo.php");

    $cuadradoForm = new Cuadrado(3, 3, "cuadrado");
    $trianguloForm = new Triangulo(3, 4, "triangulo", 2);

    echo "<h2>Cuadrado:</h2>";
    echo "· Dimensiones:  {$cuadradoForm->mostrarDimensiones()} <br>";
    echo "· ¿Es un cuadrado?: " . boolval($cuadradoForm->esCuadrado()) . " <br>";
    echo "· Area: {$cuadradoForm->calcArea()} <br>";
    echo "<br>";
    echo "<h2>Triangulo:</h2>";
    echo "· Dimensiones: {$trianguloForm->mostrarDimensiones()} <br>";
    echo "· Estilo: {$trianguloForm->mostrarEstilo()}";
}
