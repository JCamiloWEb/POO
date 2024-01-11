

<?php  
class Coche{
    //Atributos o propiedades. Con el constructor no se utiliza la definición de los atributos para asignar valores
    //PUBLIC: podemos acceder desde cualquier lugar, dentro de clase actual, dentro de clases que hereden esta clase o fuera de la clase
    public $color;
    //PROTECTED: Podemos acceder desde la clase que los define y desde clases que hereden esta clase
    protected $modelo;
    //PRIVATE: únicamente se puede acceder desde esta clase
    private $velocidad;
    public $marca;
    public $plazas;

    //Métodos()
    //Constructor : método __construct()  Nunca devuelve ningún dato, simplemente se encarga de setear información en las propiedades*****
    public function __construct($color, $modelo, $velocidad, $marca, $plazas){//Siempre tiene que ser public y es el que se ejecuta primero
        //También podría pasarle parámetros al constructor $this->color="Rojo";
        //Para asignar valores a propiedades es labor de los métodos, al instanciar o del constructor
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
//Método ayuda para ver objetos en lugar de var_dump por ejemplo  *************************************
    public function mostrarInfo(Coche $coche){ 
        //Es conveniente meter el tipado, en este caso objeto tipo coche. Se hace para exigir que el tipo de dato sea de tipo Coche

        //Nunca hay que imprimir datos dentro de una misma función, a no ser que sea un helper de una vista 

        $info = "<h1>información del coche</h1>";
        $info.="modelo: ".$coche->modelo.'<br>';
        $info.="color: ".$coche->color.'<br>';
        $info.="velocidad: ".$coche->velocidad.'<br>';

        return $info;


    }
//Fin clase
}
?>