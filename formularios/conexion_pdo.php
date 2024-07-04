<?php

$servidor ="localhost"; #127.0.0.1
$usuario ="root";
$pass = "";

try{

    #codigo que se puede ejecutar y el lenguaje controla las excepciones, errores
    $conexion = new PDO("mysql:host=$servidor;dbname=pdof",$usuario,$pass);
    $conexion ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "conexion establecida";

    #insertar
    $sql_insert  ="INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `fecha_nac`) VALUES ('', 'Pedro ', 'Lopez', current_timestamp())" ;

    $conexion->exec($sql_insert);
    echo "<br>";
    echo "Inserto un registro en usuarios<br>";

    #AHORA VAMOS A traer datos de la base de datos 

    $sql_consulta =  "select * from usuarios";
    $sentencia = $conexion->prepare($sql_consulta);
    $sentencia ->execute();

    #obtener la info
    $resultado = $sentencia->fetchAll();

    #dos formas de imprimir los datos 
    print_r($resultado);

    #muestro solo los nombres
    foreach($resultado as $fila){
      print_r($fila['nombre']);
      echo "<br>";
    }
    


}catch(PDOException $error){
  echo "Error de Conexión".$error;

}


?>