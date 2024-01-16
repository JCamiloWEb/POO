<?php 

// require_once "clases/usuario.php";
// require_once "clases/categoria.php";
// require_once "clases/entrada.php";

//AUTOLOAD ******************************************** 
//Hacer que un archivo nos haga el include automáticamente

require_once "autoload.php";
/*
$usu=new Usuario();
echo $usu->nombre . "<br>";
echo $usu->email;
*/
//ESPACIOS DE NOMBRES Y PAQUETES********************************** Se usa para la organización
// use MisClases\Usuario;
// use MisClases\Categoria;
// use MisClases\Entrada;
//O cargar en una línea todos los espacios de nombres:
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usu;
    public $categoria;
    public $entrada;
    public function __construct(){
        // $this->usu = new MisClases\Usuario(); //Quiero darle al objeto usuario el valor del objeto
        // $this->categoria= new MisClases\Categoria();
        // $this->entrada= new MisClases\Entrada();
        //Para evitar repetir la creación de objetos tenemos la palabra reservada use que permite cargar un espacio de nombres
        //De esa forma no necesito crear objetos poniendo toda la ruta
        $this->categoria=new Categoria();
        $this->usu=new Usuario();
        $this->entrada=new Entrada();
    }
}
$principal= new Principal();
var_dump($principal->usu);
echo "<br>";
$usu=new UsuarioAdmin(); 
//Tendría que hacerlo así si no cargo el namespace, además no podría tener dos objetos que se llamen igual
//Daría un errro si utilizo use PanelAdministrador\Usuario e intento crear otro usuario
//Tendría que hacerlo así use PanelAdministrador\Usuario as UsuarioAdmin;
var_dump($usu);




?>