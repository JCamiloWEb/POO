

<?php  
class Coche{
    //atributos o propiedades
    //PUBLIC: podemos acceder desde cualquier lugar, dentro de clase actual, 
    // dentro de clases que hereden esta clase o fuera de la clase
    public $color;
    //PROTECTED: Podemos acceder desde la clase que los define y desde
    // clases que hereden esta clase
    protected $modelo;
    //PRIVATE: únicamente se puede acceder desde esta clase
    private $velocidad;
    public $marca;
    public $plazas;

    //métodos()
    //constructor
    public function __construct($color, $modelo, $velocidad, $marca, $plazas){//también podría pasarle parámetros al constructor
        $this->color=$color;
        $this->modelo=$modelo;
        $this->velocidad=$velocidad;
        $this->marca=$marca;
        $this->plazas=$plazas;
    }
    public function getColor(){
       
        return $this->color;

    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
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
//método ayuda para ver objetos en lugar de var_dump por ejemplo 
    public function mostrarInfo(coche $coche){ //es conveniente meter el tipado, en este caso objeto tipo coche

        

        $info = "<h1>información del coche</h1>";
        $info.="modelo: ".$coche->modelo.'<br>';
        $info.="color: ".$coche->color.'<br>';
        $info.="velocidad: ".$coche->velocidad.'<br>';

        return $info;


    }
//Fin clase
}
?>