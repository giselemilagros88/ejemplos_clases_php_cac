<?php
    require_once "persona.php";



    // creamos una variable personaUno que le asignamos una instancia de la clase Persona
    $personaUno = new Persona("Juan", 25);
    $personaDos = new Persona("Maria", 30);
    $personaTres = new Persona("Pedro", 35);
    $personaCuatro = new Persona("Luis", 40);

    


    #echo $personaUno;
    // si yo quiero mostrar un objeto lo puedo hacer con var_dump
    var_dump($personaUno);//debug

    // vamos a usar el method descripcion que tiene la clase persona
    $descripcion = $personaUno->descripcion();

    echo "<h2>Nombre y Edad : $descripcion</h2>";

    echo "<h2>{$personaTres->saludar()}</h2>";

    $personaUno->setNombre("Juan Carlos") ;
    //$personaUno->edad = 26;
    echo $personaUno->descripcion();


?>