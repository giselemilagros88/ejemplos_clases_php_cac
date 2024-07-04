<?php
    require_once 'conexion.php';
    require_once 'peliculas.class.php';

    // Evitar error de CORS
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");//GET, POST, PUT, DELETE
    header("Access-Control-Allow-Headers: Content-Type");//json

    // Función para responder con JSON y código de estado HTTP
    function respuestaJson($statusCode, $response) {
        http_response_code($statusCode);
        echo json_encode($response);
        exit(); // die finalizar el script
    }

    // Verificar el método de la solicitud
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $peliculas = new Peliculas();// peliculas hereda de conexion, entonces automaticamente creo una conexion a la base
        $datos = $peliculas->listarPeliculasSinPaginar(1); // Listar todas las películas json
       // Retornar los datos
        respuestaJson(200, $datos);
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        // Insertar una nueva película
        $peliculas = new Peliculas();// conectate a la base automaticamente
        $postBody = file_get_contents("php://input");// levanta el json del body
        $datosArray = $peliculas->insertarPelicula($postBody);
        //echo json_encode($datosArray);
        if ($datosArray['status'] == "ok") {
            // Retornar la respuesta
            respuestaJson(201, $datosArray['result']['id']);
        }else{
            respuestaJson(500, $datosArray);
        }
        // Retornar la respuesta
       // respuestaJson(201, 'Pelicula insertada correctamente');
    }
?>
