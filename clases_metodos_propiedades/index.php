<?php 

//CLASES
//definir
class Coche{
    //atributos o propiedades
    public $color="red";
    public $modelo="aventador";
    public $velocidad=300;
    public $marca="ferrari";
    public $plazas=3;

    //métodos()
    public function getColor(){
       
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
//Fin clase
}

//instanciar
$coche=new Coche();
//usar método
echo $coche->velocidad;
$coche->setColor("amarillo").' <br>';
echo "el color del coche es: ".$coche->getColor();

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

$coche->frenar();
echo "velocidad es:".$coche->getVelocidad();

?>