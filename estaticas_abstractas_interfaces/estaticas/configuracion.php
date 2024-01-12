<?php 
/*
Una propiedad o método estático: Son propiedades o métodos normales, simplemente que para llamarlo
no necesito instanciar. Se usa la palabra reservada static
*/

class ConfiguracionStatic{
    public static $color;
    public static $newsletter;
    public static $entorno; 

    
    

    
//Para acceder a propiedades y métodos estáticos se usa la palabra reservada self:: 

    /**
     * Get the value of color
     */ 
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public static function setColor($color): void
    {
        self::$color = $color;

    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public static function setEntorno($entorno): void
    {
        self::$entorno = $entorno;

    }

}

?>