<?php 

//CLASES
//Definir
class Coche{
    //Atributos o Propiedades ********************************
    public $color="red";
    public $modelo="aventador";
    public $velocidad=300;
    public $marca="ferrari";
    public $plazas=3;

    //Métodos() *******************************
    public function getColor(){
       //this: busca en esta clase la propiedad o método 
        return $this->color;

    }

    public function setColor($color){
        $this->color =$color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;

    }

    public function getVelocidad(){
        return $this->velocidad;

    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
//Fin clase
}

//Instanciar ********************************************
$coche=new Coche();
$coche->setModelo("Barbie");
var_dump($coche) . "<br>";
//Acceder al método o propiedad (->)
echo $coche->velocidad."<br>";
$coche->setColor("amarillo").' <br>';
echo "El color del coche es: ".$coche->getColor() . "<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

$coche->frenar();
echo "La velocidad del coche es: ".$coche->getVelocidad(). "<br>";


$coche2 =new Coche();
$coche2->setColor("violeta");
$coche2->setModelo($coche->modelo) . "<br>";
var_dump($coche2);

?>