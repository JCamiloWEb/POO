<?php
//HERENCIA: posibilidad de compartir atributos y métodos entre clases

class Persona
{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    

   
   



    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function hablar (){
        return "hablando";
    }

    public function caminar (){
        return "caminando";
    }
}
//HEREDA PERSONA
class Informatico extends Persona{
    public $lenguajes;
    public $experienciaProg;

    public function __construct(){
        $this->lenguajes="html css js";
        $this->experienciaProg=10;
    }
    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }
    public function programar(){
        return "programar";
    }


    /**
     * Get the value of lenguajes
     */ 
    public function getLenguajes()
    {
        return $this->lenguajes;
    }

    /**
     * Set the value of lenguajes
     *
     * @return  self
     */ 
    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this;
    }
}
//HEREDE propiedades y métodos DE PERSONA E INFORMATICO

class TecnicosRedes extends Informatico{
    public $testearRed;
    public $experienciaRedes;

    public function __construct(){    
        /******
         * Si hay un constructor en HIJO, no heredera lo del constructor del padre, para que lo haga
         * usaremos parent::   */
        parent::__construct();
        $this->testearRed="experto";
        $this->experienciaRedes=5;
    }
    public function auditarRedes(){
        return "auditanto red";

    }

    /**
     * Get the value of testearRed
     */ 
    public function getTestearRed()
    {
        return $this->testearRed;
    }

    /**
     * Set the value of testearRed
     *
     * @return  self
     */ 
    public function setTestearRed($testearRed)
    {
        $this->testearRed = $testearRed;

        return $this;
    }
}

?>