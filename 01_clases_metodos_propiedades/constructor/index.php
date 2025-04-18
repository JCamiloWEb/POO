<?php 
require_once "coche.php";

$coche=new Coche("red", "aventador", 300, "ferrari", 3);
$coche2=new Coche("blue", "vergas", 700, "peto", 20);

$coche->color="rosa";
//********* ACCEDER A PROPIEDAD PROTECTED O PRIVATE ********************************
//$coche->modelo="nada"; //si quiero cambiar(set) o conseguir(get) propiedades protected/private tengo que hacerlo con método set/get
//$coche->velocidad=800; //Me dará un error porque la propiedad es private

$coche->setModelo("nada");

//var_dump($coche);
// echo "<br>";
// var_dump($coche2);

echo $coche2->mostrarInfo($coche2);

?>