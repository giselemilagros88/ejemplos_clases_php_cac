<?php

#quiero leer un json 

$json = '[{"nombre":"Oscar","apellido":"Gomez"}, {"nombre":"Rocio","apellido":"Ruby"}]' ;

#convierte el string a json 
$resultado = json_decode($json);

#print_r($resultado);

#echo "<br>";

foreach($resultado as $persona){

  #  echo $persona->nombre ." ". $persona->apellido."<br>";
}

# como formar un json para formar un endpoint, y dar servicio a otros lenguajes o aplicaciones

$personas = array("Pedro"=>40,"Jose"=>23,"Marisa"=>38);

$json_edades = json_encode($personas);

echo $json_edades;

?>