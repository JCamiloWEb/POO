<?php 
namespace MisClases;//Establecemos el nombre del paquete en todas las clases que queramos
//Seguidamente haremos una carpete 'paquete' y meteremos las clases
class Categoria{
    public $nombre;
    public $descripcion;
    public function __construct(){
        $this->nombre="Acción";
        $this->descripcion="Enfocada a videojuegos de acción";



    }
}


?>