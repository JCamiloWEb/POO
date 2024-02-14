<?php 


class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre="Carlos";
        $this->email="carlos@gmail.com";
        echo "Instancia del objeto creada <br>"; //No se deben imprimir cosas en el constructor pero para verlo mejor
    }
/************************************************************************************** */
//toString sirve para imprimir un objeto como un String
//Podríamos incluso ejecutar llamadas a métodos dentro de __toString
    public function __toString(){

        return "Hola, {$this->nombre}, estás registrado con {$this->email}";

    }
    public function __destruct(){
        echo "<br> Destruyendo el objeto";

    }
}



$user = new Usuario();
//Daría fallo sin el método toString echo $user; PUES ESTAMOS IMPRIMIENDO CON ECHO
echo $user . "<br>";
echo $user->email;



?>