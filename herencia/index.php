

<?php 

require_once "clases.php";
$persona =new Persona();
//var_dump($persona);

$informatico =new Informatico();
$informatico->sabeLenguajes($informatico->lenguajes." php");
var_dump($informatico);

$tecRedes=new TecnicosRedes();
echo "<br>";

var_dump($tecRedes);
?>