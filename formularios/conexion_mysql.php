<?php


$conectar = mysqli_connect("localhost","root","","pdof"); #pdof

if(mysqli_connect_errno()){

    echo 'Error de conexion';
    header("location: index.php");
}else{
   echo 'se conecto correctamente <br>';
}
$sql = "select * from usuarios";

$query=mysqli_query($conectar, $sql);


echo "<br>";

while($tabla = mysqli_fetch_array($query)){
    echo $tabla['nombre'].'<br>';
}

$sql_insert  ="INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `fecha_nac`) VALUES ('','Belen', 'Moscardi', current_timestamp())" ;

$insert=mysqli_query($conectar, $sql_insert);

if ($insert) {
    echo "<br> inserto el dato";

}else{
    echo 'Error: '. mysqli_errno($conectar);
}
$query=mysqli_query($conectar, "select * from usuarios");


echo "<br>Muestro luego de insertar<br> ";

while($tabla = mysqli_fetch_array($query)){
    echo $tabla['nombre'].'<br>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Conexion mysql</title>
</head>
<body>
<div class="row table-responsive">
        <table class="table table-responsive">
            
            <tr>
      
                <th>
                ID
                </th> 
                <th>
                Nombre
                </th> 
                <th>
                Apellido
                </th> 
               
               
                <th>
                editar
                </th> 
                <th>
                eliminar
                </th> 
   
            </tr>

            
            <?php
            $query=mysqli_query($conectar, "select * from usuarios");
            while($tabla = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td> <?php echo $tabla['id'];?> </td>
                    <td> <?php echo $tabla['nombre'];?> </td>
                    <td> <?php echo $tabla['apellido'];?> </td>
                    
                    <td><a href="modificar.php?id=<?php echo $tabla['id'];?>"><i class="fas fa-pencil-alt"></i></a></td>
                
                    <td><a href="eliminar.php?id=<?php echo $tabla['id'];?>"><i class="fas fa-trash-alt"></i></a></td>
    
        
                </tr>
            <?php } ?>
         </table>
        
    </div>
</body>
</html>




