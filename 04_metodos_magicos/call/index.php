<?php
//Método CALL. Sería como un sustituto de la sobrecarga de métodos
//Nos permite detectar cuando llamamos a métodos que no existen, ejecutar este método. A modo de sustituto

class Persona
{
    private $nombre;
    private $edad;
    private $ciudad;
    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;

    }
    //call*******************************************************************
//Con este método podemos buscar coincidencias
    public function __call($name, $arguments)
    {
        // return "No existe el método";
        //Con este método podemos buscar coincidencias
        $prefix_metodo = substr($name, 0, 3); //Sacarme las 3 primeras letras del $name con substr
        //Como estamos llamando al metodo get:
        if ($prefix_metodo == "get") {

            $nombre_metodo = substr(strtolower($name), 3); //para que recorte el get y devuelva nombre en minúsculas
            //Es decir sería igual si lo hicieramos arriba como $this->nombre

            if(!isset($this->$nombre_metodo)){
                return "El método no existe";
            }


            return $this->$nombre_metodo;
        } else {
            return "El método no existe";
        }

    }
}


$persona = new Persona("Carlos", 13, "medallo");
//No podría acceder a nombre con $persona->nombre;
//$persona->nombre;
//Tampoco podría acceder con get puesto que no existe  $persona->getNombre();
//**************************************************************** */
//Con el método call, podría entonces llamar a métodos get que no existen y obtener el resultado
echo $persona->getNombre() . "<br>";
echo $persona->getEdad() . "<br>";
echo $persona->getCiudad() . "<br>";
echo $persona->getHola() . "<br>";
echo $persona->mostrarNombre();

?>