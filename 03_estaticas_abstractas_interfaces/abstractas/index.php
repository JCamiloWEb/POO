<?php 

//Se usa la palabra reservada abstract. Se usa para 'obligar' a que en las clases hijas haya ciertos métodos
//Se usa para definir la estructura de las hijas
//No se pueden instanciar objetos de una clase abstracta
abstract class Ordenador{
    //Las propiedades no pueden ser abstract
    public $encendido;

//Cuando defino funciones abstract no puedo definirlas****
    abstract public function encender();
    abstract public function apagar();
}
//Una clase abstracta no se puede instanciar pero sí que la podemos usar para heredar de ella y define la estructura
//Todos los métodos definidos como abstractos en clase padre se tendrán (obligatoriamente) que definir tambien en la clase hija

class PcAsus extends Ordenador{
    public $software;
    public function encender(){
        $this->encendido=true;
    }
    public function apagar(){
        $this->encendido=false;
    }
    public function arrancarSoftware(){
        $this->software=true;
    }
}

$ordenador=new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);


?>