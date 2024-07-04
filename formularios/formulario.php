<?php
  #defino la variable para que exista aunque no haya envio 
  $email ="";
  $pass = "";
  $provincia ="";
  #si hubo un envio 
  /* Cada vez que se toca el boton submit del formulario y si el method del form es POST, se crea el array asociativo con todas las keys que cada representa a un input del formulario ejemplo:
    $_POST = [
        "email" => "gise@gmail.com",
        "pass" => '123456',
        "provincia" => "Buenos Aires"
    ];
    method = GET
    $_GET = [
        "email" => "gise@gmail.com",
        "pass" => '123456',
        "provincia" => "Buenos Aires"
    ];
    
    */
  if ($_POST){
    #si hay info asignarla, sino ""
    if (isset($_POST['email'])){
      $email=$_POST['email'];
    }else{
      $email="";
    }
    #Determina si una variable está definida y no es NULL 
    if (isset($_POST['pass'])){
      $pass=$_POST['pass'];
    }else{
      $pass="";
    }
    if (isset($_POST['provincia'])){
      $provincia=$_POST['provincia'];
    }else{
      $provincia="";
    }
     // CREARIA UNA CONEXION A LA BASE
     // VALIDARIA CONTRA LA BASE
      // SI ES CORRECTO LO REDIRIJO A OTRA PAGINA INDEX.PHP
      // SI NO ES CORRECTO LO REDIRIJO A OTRA PAGINA 

  }
?>
<?php
      #codigo enbebido
      if ($_POST){ ?>
        <h1>
          Hola: <?php echo $email .", usted vive en: ".$provincia; ?>
        </h1>
      <?php }
 ?>

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
          <!--recupero el valor que se envio en caso de no haber envio email esta vacio-->
          <input value="<?php echo $email ?>" type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3 col-sm-6 ps-5">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 col-sm-6 ps-5">
          <label for="pais" class="form-label">En que Provincia vives ?</label>
           <!-- Script by hscripts.com -->
          <select name="provincia">
            <script language="javascript">
              var states = new Array("Buenos Aires", "Buenos Aires Capital", "Catamarca", "Chaco", "Chubut", "Cordoba", "Corrientes", "Entre Rios", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquen", "Rio Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Santiago del Estero", "Tierra del Fuego", "Tucuman");
              for(var hi=0; hi<states.length; hi++)
              document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
            
            </script>
           
          </select>

        </div>
       <div class="ps-5">
        <input id="enviar" type="submit" class="btn btn-primary" value="Enviar"/>
       </div>
        
      </form>

     </div>
  
    </div>
     
   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>

