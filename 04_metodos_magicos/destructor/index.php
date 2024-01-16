<?php 
//Los destructores

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        echo "Instancia del objeto creada <br>"; //No se deben imprimir cosas en el constructor pero para verlo mejor
    }

    //Destructor *******************************************************
    //Su función es detectar cuando un objeto va a dejar de ejecutarse
    //Sirve para destruir la instancia. Cuando ya no vayan a existir más referencias al objeto. 
    //Es decir, se llamará a esta función cuando PHP detecte que ya no se podrá llamar al objeto nunca
    public function __destruct(){
        echo "Destruyendo el objeto";

    }
}

$user = new Usuario();

for($i=0; $i<=200; $i++){

    echo $i . "<br>";

}


?>