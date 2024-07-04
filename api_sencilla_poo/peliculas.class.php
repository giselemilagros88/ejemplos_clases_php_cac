<?php
    require_once 'conexion.php';
    // hereda de conexion entonces puede usar los methods dentro de la clase padre
    class peliculas extends conexion{

         // atributo para devolver una respuesta al front
         public $response = ['status' => "ok","result" => array()];

         # inserta una pelicula en la base de datos
         public function insertarPelicula($json){
          
            #convertimos el json a un array asociativo
            $datos = json_decode($json, true);
             #si no estan los datos requeridos
            if (!isset($datos['titulo']) ||  !isset($datos['genero']) || !isset($datos['duracion']) || !isset($datos['imagen'])) {
                $this->response['status'] = "error";
                $this->response['result'] = array(
                    "error_id" => "400",
                    "error_msg" => "Datos enviados incompletos o con formato incorrecto"
                );
                 #devolvemos un bad request
                return $this->response;
              
            } else {
                $titulo = $datos['titulo'];
                $duracion = $datos['duracion'];
                $genero = $datos['genero'];
                $imagen = $datos['imagen'];
               // codigo para levantar la imagen guardarla en el server y guardar la ruta en la base de datos
               
               // id_pelicula autonumerico
                $query = "INSERT INTO peliculas (id_pelicula, titulo, genero, duracion, imagen) VALUES (NULL, '$titulo','$genero', '$duracion', '$imagen')";   
                // este method es de la clase conexion, la clase pelicula hereda de conexion, asi que puede usar los methods y atributos protected o public         
                $datos = $this->nonQueryId($query); // retorna el id del registro insertado
                if ($datos) { // si tiene un id
                    // le devuelve al front un id
                    $respuesta = $this->response;
                    $respuesta["result"] = array(
                        "id" => $datos
                    );
                    return $respuesta;
                } else {
                    // si no tiene un id
                    $respuesta = $this->response;
                    $respuesta['status'] = "error";
                    $respuesta['result'] = array(
                        "error_id" => "500",
                        "error_msg" => "Error interno del servidor"
                    );
                     #devolvemos un 500
                    return $respuesta;
                }
            }
        }  

        public function listarPeliculasSinPaginar(){
            $query = "SELECT * FROM peliculas";
            $datos = $this->obtenerDatos($query);// de la clase conexion
            return $datos;
        }
       
        // para listar todas las peliculas y en cada pagina vendran 16 peliculas
        public function listarPeliculas($pagina){
            /*$cantidad es el número de registros que deseas mostrar por página (16 en este caso).
              $inicio es el desplazamiento, que se calcula como (pagina - 1) * cantidad. 
              Esto asegura que cuando estés en la página 1, el offset será 0, 
              para la página 2 el offset será 16, y así sucesivamente.*/
              
            $inicio = 0;
            $cantidad = 16;
            if ($pagina > 1) {
                $inicio = ($cantidad * ($pagina - 1)) + 1;
                $cantidad = $cantidad * $pagina;
            }
            $query = "SELECT * FROM peliculas LIMIT $inicio, $cantidad";
            $datos = $this->obtenerDatos($query);
            return $datos;
        }

       

        // para buscar una pelicula por su id
        public function obtenerPelicula($id){
            $query = "SELECT * FROM peliculas WHERE id_pelicula = '$id'";
            $datos = $this->obtenerDatos($query);
            if ($datos) {
                return $datos;
            } else {
                return 0;
            }
        }
        // para buscar una pelicula por una parte de su nombre
        public function buscarPelicula($nombre){
            // pasar a minuscula el nombre y el campo de la base tambien
            $nombre = strtolower($nombre);
            $query = "SELECT * FROM peliculas WHERE LOWER(titulo) LIKE '%$nombre%'";
            $datos = $this->obtenerDatos($query);
            if ($datos) {
                return $datos;
            } else {
                return 0;
            }
        }
       
        #actualiza una pelicula en la base de datos
        public function actualizarPelicula($json){
            
            #convertimos el json a un array asociativo
            $datos = json_decode($json, true);

            
            #si no estan los datos requeridos
            if (!isset($datos['id_pelicula']) || !isset($datos['titulo']) || !isset($datos['genero']) || !isset($datos['duracion']) || !isset($datos['imagen'])) {
                $this->response['status'] = "error";
                $this->response['result'] = array(
                    "error_id" => "400",
                    "error_msg" => "Datos enviados incompletos o con formato incorrecto"
                );
                 #devolvemos un bad request
                return $this->response;
            } else {
                $id = $datos['id_pelicula'];
                $titulo = $datos['titulo'];
                $genero = $datos['genero'];
                $duracion = $datos['duracion'];
                $imagen = $datos['imagen'];
                // codigo para levantar la imagen guardarla en el server y guardar la ruta en la base de datos
                // faltan validaciones para la fecha de lanzamiento 
                $query = "UPDATE peliculas SET titulo = '$titulo', genero = '$genero', duracion = '$duracion',imagen = '$imagen' WHERE id_pelicula = '$id'";            
                $datos = $this->nonQuery($query);
                if ($datos >= 1) {
                    $respuesta = $this->response;
                    $respuesta["result"] = array(
                        "mensaje" => "Registro actualizado correctamente"
                    );
                    return $respuesta;
                } else {
                    $this->response['status'] = "error";
                    $this->response['result'] = array(
                        "error_id" => "500",
                        "error_msg" => "Error interno del servidor"
                    );
                     #devolvemos un 500
                    return $this->response;
                }
            }
        }
        #eliminar una pelicula por su id de la base de datos
        public function eliminarPelicula($json){
           
             #convertimos el json a un array asociativo
            $datos = json_decode($json, true);
            if (!isset($datos['id_pelicula'])) {
                $this->response['status'] = "error";
                $this->response['result'] = array(
                    "error_id" => "400",
                    "error_msg" => "Datos enviados incompletos o con formato incorrecto"
                );
                 #devolvemos un bad request
                return $this->response;
            }else{
                $id_pelicula = $datos['id_pelicula'];
                $query = "DELETE FROM peliculas WHERE id_pelicula = '$id_pelicula'";
                $datos = $this->nonQuery($query);
                if ($datos >= 1) {
                    $respuesta = $this->response;
                    $respuesta["result"] = array(
                        "mensaje" => "Registro eliminado correctamente"
                    );
                    return $respuesta;
                } else {
                    $this->response['status'] = "error";
                    $this->response['result'] = array(
                        "error_id" => "500",
                        "error_msg" => "Error interno del servidor"
                    );
                     #devolvemos un 500
                    return $this->response;
                }
            }
           
        }
       

    }

?>