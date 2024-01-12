<?php 
//Un trait nos permite definir una serie de métodos para compartirlo entre diferentes clases.
//Es útil cuando no se quiere utilizar la herencia 

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ". $this->nombre. "</h1>";
    }
}
class Coche{
    public $nombre;
    public $marca;
    //Para adjuntar a una clase el trait se usa la palabra reservada use *****************************
    use Utilidades;

    public function __construct(){
        $this->nombre="Mercedes";
    }
}

class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
    use Utilidades;
}
//********************************************** */
$coche=new Coche();
$persona = new Persona();
$videjuego = new VideoJuego();


$coche->mostrarNombre();
//****************************************** */
$persona->nombre="Jorge";
$persona->mostrarNombre();
//****************************************** */
$videjuego->nombre="GTAV";
$videjuego->mostrarNombre();
//var_dump($coche);

?>