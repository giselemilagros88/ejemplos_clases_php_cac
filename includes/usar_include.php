<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA INCLUIDE</title>
</head>
<body>
        <?php
        /*
        En PHP, tanto `include` como `require` son constructores que se utilizan para incluir y ejecutar archivos externos en un script. La diferencia principal entre ellos radica en cómo manejan los errores cuando el archivo no puede ser incluido.

        El constructor `include` se utiliza para incluir y ejecutar un archivo externo en un script. Si el archivo no se encuentra o hay algún problema al incluirlo, PHP mostrará una advertencia (`E_WARNING`) pero continuará ejecutando el resto del script.

        Ejemplo de uso de `include`:

        ```php
        include 'archivo.php';
        ```

        Por otro lado, el constructo `require` también se utiliza para incluir y ejecutar un archivo externo en un script. Sin embargo, si el archivo no se encuentra o hay algún problema al incluirlo, PHP mostrará un error fatal (`E_COMPILE_ERROR`) y detendrá la ejecución del script.

        Ejemplo de uso de `require`:

        ```php
        require 'archivo.php';
        ```

        En resumen:

        - `include` se utiliza cuando se desea incluir un archivo externo en el script y se puede continuar la ejecución incluso si el archivo no se encuentra o hay algún problema.
        - `require` se utiliza cuando se desea incluir un archivo externo en el script y es esencial que el archivo esté presente y se pueda incluir correctamente. Si hay algún problema, se mostrará un error fatal y se detendrá la ejecución del script.

        Es importante tener en cuenta que tanto `include` como `require` permiten la inclusión de archivos PHP, HTML u otros tipos de archivos. Además, se puede utilizar `include_once` y `require_once` para asegurarse de que el archivo externo solo se incluya una vez, evitando la inclusión duplicada en caso de que ya haya sido incluido anteriormente.
        */
            #esto me permite traer codigo de otro archivo
            #si hay errores advierte pero sigue con lo proximo 
            #en caso de no existir el archivo o si adentro el codigo tiene errores 
           
          // require_once 'archivo.php';
           include_once 'include.php';
           include_once 'include.php';
           /* include 'include.php';
            include 'include.php';
            include 'include.php';*/
            /*include_once 'include.php';
            require_once 'include.php';
            require_once 'includ.php';*/
            echo "<br> <h3>hola mundo estoy debajo del archivo incorporado!<h3>";
           
            #funciona similar pero la diferencia es que no sigue si pasa algo de lo mencionado
            # require 'apis/consumir_api.php';

        ?>
</body>
</html>

