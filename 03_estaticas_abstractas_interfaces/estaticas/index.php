<?php 
require_once "configuracion.php";

ConfiguracionStatic::setColor("azul");
ConfiguracionStatic::setEntorno("localhost");

echo ConfiguracionStatic::$color . "<br>";

echo ConfiguracionStatic::$entorno . "<br>";

?>