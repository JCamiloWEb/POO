<?php 

//Una interfaz es un 'contrato' donde definimos qué métodos y en qué orden van a estar en una clase

interface OrdenadorI{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

class IMac implements OrdenadorI{
    private $modelo;
    public function encender(){
        return "Encendido";

    }
    public function apagar(){

    }
    public function reiniciar(){

    }
    public function desfragmentar(){

    }
    public function detectarUSB(){

    }
    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
}

$maquintos = new IMac();
$maquintos->setModelo("Macbook PRO");
echo $maquintos->getModelo();
//var_dump($maquintos);

?>