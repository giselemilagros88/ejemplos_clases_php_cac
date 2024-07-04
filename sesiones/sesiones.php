<?php 
#mantener datos, ejemplo en un carrito de compras, mientras el navegador este abierto 

#las variables que vamos a guardar en estas variables van a poder mantenerte en todas las paginas del sitio web
session_start();

#se loguea el usuario y mantenemos el usuario en toda la pagina 
#declaro variables de tipo sesiones, puedo guardar varias variables con el tipo de dato que necesito 
$_SESSION["usuario"]="Gisele";
$_SESSION["estado"]="logueado";

echo "Sesión iniciada".":<br>";

echo $_SESSION["usuario"]." ESTADO: ".$_SESSION["estado"];

# en un ejemplo real, podes iniciar las variables de sesion y luego llenarlas
# con la info del login. 

# cuando se cierra el navegador ya no se puede acceder a las variables de sesiones
# porque se cierra el navegador y las variables de sesiones se pierden ya que fueron creadas en el servidor 

?>