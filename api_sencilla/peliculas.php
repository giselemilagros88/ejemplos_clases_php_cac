<?php
// Establecer el encabezado para indicar que el contenido es JSON
 header('Content-Type: application/json');
 // Evitar error de CORS
 header("Access-Control-Allow-Origin: *");
 header("Access-Control-Allow-Methods: *");//GET, POST, PUT, DELETE
 header("Access-Control-Allow-Headers: Content-Type");//json

// Variables de configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peliculas_cac_java";
$puerto = "3306";

// Crear conexión a la base de datos MySQL
$conn = new mysqli($servername, $username, $password, $dbname,$puerto);

// Verificar si la conexión tiene errores
if ($conn->connect_error) {
    // Si hay un error de conexión, devolver código de respuesta 500 (Error interno del servidor)
    http_response_code(500);
   
    die(json_encode(array("message" => "Error interno del servidor: " . $conn->connect_error)));
}

// Manejar la petición POST para insertar una nueva película
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener y escapar los valores recibidos por POST para prevenir inyecciones SQL
    /*real_escape_string toma una cadena de texto como entrada y devuelve la misma cadena, pero con caracteres especiales (como comillas simples, dobles, barras invertidas, etc.) escapados con una barra invertida \. Esto asegura que los datos enviados a la base de datos no alteren la estructura de la consulta SQL y no introduzcan comandos maliciosos que puedan comprometer la seguridad de la base de datos. */
  //  $genero = isset($_POST['genero']) ? $conn->real_escape_string($_POST['genero']) : '';
    $postBody = file_get_contents("php://input");
    // lo transformo en array el json--> wn array asociativo de php key=>value
    $data = json_decode($postBody, true);
    $titulo = $data['titulo'] ;
    $genero = $data['genero'] ;
    $duracion = $data['duracion'];
    $imagen = $data['imagen'];
    

    // Verificar si todos los campos necesarios están completos
    if ($titulo && $genero && $duracion && $imagen) {
        // Construir la consulta SQL para insertar una nueva película en la base de datos
        $query = "INSERT INTO peliculas (id_pelicula, titulo, genero, duracion, imagen) VALUES (NULL, '$titulo', '$genero', '$duracion', '$imagen')";
        
        // Ejecutar la consulta SQL y verificar si se realizó correctamente
        if ($conn->query($query) === TRUE) {
            // Obtener el ID de la película recién insertada
            $last_insert_id = $conn->insert_id;
            // Devolver código de respuesta 201 (Creado) y el ID de la película creada en formato JSON
            http_response_code(201);
            echo json_encode(array("message" => $last_insert_id));
        } else {
            // Si hubo un error al ejecutar la consulta SQL, devolver código de respuesta 500 (Error interno del servidor) con mensaje de error
            http_response_code(500);
            echo json_encode(array("message" => "Error al crear la película: " . $conn->error));
        }
    } else {
        // Si no se completaron todos los campos necesarios, devolver código de respuesta 400 (Solicitud incorrecta) con mensaje de error
        http_response_code(400);
        echo json_encode(array("message" => "Debe completar todos los campos"));
    }
}

// Manejar la petición GET para obtener todas las películas
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Construir la consulta SQL para seleccionar todas las películas de la base de datos
    $query = "SELECT * FROM peliculas";
    // Ejecutar la consulta SQL
    $result = $conn->query($query);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Si se encontraron películas, devolver código de respuesta 200 (OK) con las películas en formato JSON
        http_response_code(200);
        $peliculas = array();
        while($row = $result->fetch_assoc()) {
            $peliculas[] = $row;
        }
        // transforma en un json
        echo json_encode($peliculas);
    } else {
        // Si no se encontraron películas, devolver código de respuesta 404 (No encontrado) con mensaje de error
        http_response_code(404);
        echo json_encode(array("message" => "No se encontraron películas"));
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

