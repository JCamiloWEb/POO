<?php 

// require_once "clases/usuario.php";
// require_once "clases/categoria.php";
// require_once "clases/entrada.php";

//AUTOLOAD ******************************************** ******************************************************
//Hacer que un archivo nos haga el include automáticamente

require_once "autoload.php";
/*
$usu=new Usuario();
echo $usu->nombre . "<br>";
echo $usu->email;
*/
//ESPACIOS DE NOMBRES Y PAQUETES********************************** Se usa para la organización***********************
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
    public function prueba(){
        
    }
//CONSTANTES PARA ACCEDER A INFORMACIÓN************************************************************
    public function informacion(){
        echo __CLASS__ . "<br>"; //Clase en la que estoy
        echo __METHOD__ . "<br>"; //Método en el que estoy
        echo __FILE__ . "<br>";//Ruta del archivo
        echo __NAMESPACE__ . "<br>"; //Si lo hubiera

    }

}

$principal= new Principal();
$principal->informacion();

var_dump($principal->usu);
echo "<br>";
$usu=new UsuarioAdmin(); 
//Tendría que hacerlo así si no cargo el namespace, además no podría tener dos objetos que se llamen igual
//Daría un errro si utilizo use PanelAdministrador\Usuario e intento crear otro usuario
//Tendría que hacerlo así use PanelAdministrador\Usuario as UsuarioAdmin;
var_dump($usu);

//COMPROBAR SI EXISTE UNA CLASE************************************************************************
//Se utiliza la función class_exists
//Con un @, esconde los warnings
$clase= @class_exists("MisClases\Usuario"); //No se pueden comprobar alias, para hacerlo: PanelAdministrador\Usuario
if($clase){
    echo "<h1>La clase Sí existe</h1>";
}else{

    echo "<h1>La clase NO existe</h1>";

}

//COMPROBAR SI EXISTE UN MÉTODO ***************************************************************************
//Se utiliza la función get_class_methods
$secundario=new Principal();
$metodos=get_class_methods($secundario); //Consigue todos los métodos del objeto

$busqueda=array_search("__construct", $metodos);
var_dump($busqueda); //Me tira el indice del elemento, en este caso 0 pues es el primer método

?>