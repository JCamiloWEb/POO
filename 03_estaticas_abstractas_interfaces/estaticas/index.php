<?php 
require_once "configuracion.php";

ConfiguracionStatic::setColor("azul");
ConfiguracionStatic::setEntorno("localhost");

echo ConfiguracionStatic::$color . "<br>";

echo ConfiguracionStatic::$entorno . "<br>";


//También podríamos instanciar el objeto 
$configuracion = new ConfiguracionStatic();
$configuracion::$color = "rojo";
echo $configuracion::$color . "<br>";
$configuracion->setColor("azul");
echo $configuracion::$color . "<br>";
?>