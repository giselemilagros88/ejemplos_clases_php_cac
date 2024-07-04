

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>POST</title>
</head>
<body>
 <div class="container col-sm-6 border shadow-lg p-3 mb-5 bg-body rounded mt-5">
     <div class="ps-5" >
     <form action="" method="post">
        <div class="mb-3 col-sm-10 ps-5">
          <label for="exampleInputEmail1" class="form-label">Dirección Email</label>
          <input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3 col-sm-6 ps-5">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
        </div>
       
       <div class="ps-5">
        <input type="submit" class="btn btn-success">
       </div>
        
      </form>

     </div>
  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>

<?php
 #require "usuario.php";
 if ($_POST){ 
   
    $nombre = $_POST["email"]; 

    $pass= $_POST["pass"]; 

    #$usuario = new Usuario($nombre,$pass);

    // finalmente persistimos el user en la base

    echo "estoy validando desde la misma pagina";
    echo "<br>";
    echo "Hola ".$nombre;
    echo "<br>";
    
    $contrasenia_guardada="123456";

    if ($pass != $contrasenia_guardada) {
        echo "Su contraseña no es correcta";

    }

 }
?>




