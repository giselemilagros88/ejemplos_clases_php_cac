<?php

 # si el formulario tenia el method post y alguien toco el boton submit (input)
 if ($_POST){ # entonces

    $nombre = $_POST["email"];  # array asociativo que se crea automaticamente cuando el user toca el input submit con todos los values que los user completaron en las key que son el atributo name de cada input

    $pass= $_POST["pass"]; 

    echo "Hola ".$nombre;

    echo "<br>";
    
    $contrasenia_guardada="123456";

    if ($pass != $contrasenia_guardada) {
        echo "<h2>Su contraseña no es correcta</h2>";

    }
    else{
        echo "<h1>INGRESO CORRECTAMENTE AL SISTEMA</h1>";
    }

 }


 if ($_GET){ #si existe el array asociativo get, se envian los datos por la url, el user puede ver la info que viaje

    $mail = $_GET["email"]; 

    $pass= $_GET["pass"]; 

    echo "Hola ".$mail;

    echo "<br>";
    
    $contrasenia_guardada="123456";

    if ($pass != $contrasenia_guardada) {
        echo "Su contraseña no es correcta";

    }

    /*
    $variable = " L 45 ";
    $variable = (int) $variable; 
   # $variable = (int) trim($variable);
   
    echo $variable;

    echo "<br>";

     #array clasico 
     $numeros = [10,20,30,40,50,60];

     
     var_dump($numeros);
     echo "<br>";

     $array = array("a"=>"manzana" , "b" =>"banana");
    // $_GET = array("email"=>"administrador@gmail.com" , "pass" =>"787878787");
     foreach($array as $fruta){

        echo $fruta;
        echo "<br>";
        echo "<hr>";

    } */

 } 
?>