

<?php 

require_once "clases.php";
$persona =new Persona();
var_dump($persona);

$informatico =new Informatico();
$informatico->setAltura(1.9);
$informatico->sabeLenguajes("js, java, css");
var_dump($informatico);

$tecRedes=new TecnicosRedes();
var_dump($tecRedes);
?>