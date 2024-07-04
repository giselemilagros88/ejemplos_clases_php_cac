<?php 


#como destruir la variable de sesion 
# por ejemplo si el usuario va comprando cosas de un carrito y esos articulos
#se guardan en una variable de sesion, al finalizar el carrito y cuando paga, limpiamos esa info

session_start();
session_destroy();

#ya no se va a poder leer las variables 
echo "se destruyo la sesion de usuario";
?>