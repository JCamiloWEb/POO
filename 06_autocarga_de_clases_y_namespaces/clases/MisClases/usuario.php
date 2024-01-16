<?php 

namespace MisClases; //Establecemos el nombre del paquete en todas las clases que queramos
//Seguidamente haremos una carpete 'paquete' y meteremos las clases
class Usuario{
    public $nombre;
    public $email ;
    public function __construct(){
        $this->nombre="Carlos";
        $this->email="carlos@gmail.com";



    }
}


?>