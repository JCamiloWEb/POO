<?php 
//Se le pasa el nombre de la clase
function app_autoloader($class){

    require_once "clases/" . $class . ".php";
}

//Esta función utiliza la función de arriba para buscar todas las clases del directorio que le indique
spl_autoload_register("app_autoloader");

?>