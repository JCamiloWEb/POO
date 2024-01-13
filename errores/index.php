<?php
//El try - catch sirven para capturar errores, en código susceptible a errores
//
try {
    if(isset($_GET['id'])){
        echo "<h1>El parámetro es: {$_GET['id']}</h1>"; 
        //http://localhost/udephp/PHP%20Lenguaje/PHP%20POO/errores/?id=2

    }else{
        throw new Exception("Faltan parámetros por la URL");
    }
    

} catch (Exception $e) {

    echo "Ha habido un error: ". $e->getMessage();

} 
/*
finally{  //Cuando se termine de ejecutar todo el contenido de try - catch
    echo "<br>Todo correcto";

}*/




?>