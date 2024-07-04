<?php 

session_start();

#puedo leer las variables de sesion que fueron inicializadas en otro archivo
#sirve para ver en todas las paginas mientras este el navegador abierto 

echo "usar sesion: Sesión iniciada".":<br>";

# isset(): Comprobar si una variable está definida. 

if ( isset($_SESSION["usuario"]) ){
    echo $_SESSION["usuario"]." ESTADO: ".$_SESSION["estado"];
}else{
    echo "no hay datos";
}




# PHP empty(): Para comprobar si una variable está vacía.
# PHP is_array(): Para comprobar si una variable es un array.
# PHP is_bool(): Para comprobar si una variable es un boolean.
# PHP is_float(): Para comprobar si una variable es un float.
# PHP is_int(): Para comprobar si una variable es un entero.
# PHP is_numeric(): Para comprobar si una variable es un número.
# PHP is_string(): Para comprobar si una variable es un string.
# PHP is_scalar(): Para comprobar si una variable es escalar.
# PHP is_object(): Para comprobar si una variable es un objeto.
# PHP is_resource(): Para comprobar si una variable es un recurso.
# PHP is_null(): Para comprobar si una variable es NULL.
# PHP is_callable(): Para comprobar si una variable es una función.
# PHP is_iterable(): Para comprobar si una variable es iterable.
# PHP is_countable(): Para comprobar si una variable es countable.
# isset(): Para comprobar si una variable está definida.

?>