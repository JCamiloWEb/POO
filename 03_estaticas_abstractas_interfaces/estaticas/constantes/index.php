<?php 

class Usuario{
//Para declarar una constante se usa la palabra reservada const y la variable en mayúscula. 
//Además no puedo cambiar el valor de las constantes
//FUNCIONA ADEMÁS COMO LOS MÉTODOS Y PROPIEDADES ESTÁTICOS
    const URL_COMPLETA ="http:/localhost";
    public $email;
    public $pasos;

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pasos
     */ 
    public function getPasos()
    {
        return $this->pasos;
    }

    /**
     * Set the value of pasos
     *
     * @return  self
     */ 
    public function setPasos($pasos)
    {
        $this->pasos = $pasos;

        return $this;
    }
}

$usuario= new Usuario();
//********************************************* */
//Como pasaba con los métodos estáticos no funciona accediendo con (->)
echo Usuario::URL_COMPLETA . "<br>";
echo $usuario::URL_COMPLETA . "<br>";
var_dump($usuario);

?>