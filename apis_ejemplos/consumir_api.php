<?php

#developer.dailymotion.com
#https://api.dailymotion.com/videos?channel=sport&limit=10

$url = 'https://api.dailymotion.com/videos?channel=music&limit=10';
#estas configuraciones me van a dejar leer en la api 
$opciones = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

#me deja leer el body en un string 
$response = file_get_contents($url,false,stream_context_create($opciones));

$json_response = json_decode($response);

#print_r($json_response);
/*
#vamos a acceder a list
foreach($json_response->list as $video){

    #pruebo si accedi bien a cada objeto de la lista 
    #print_r($video);
    echo $video->title;
    echo "<br>";
    echo $video->channel;
    echo "<br>";
}*/


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de Api</title>
</head>
<body>
    <header>
        <h1>Videos de dailymotion</h1>
    </header>
   

    <main>
       
        <ul>
            <?php foreach($json_response->list as $video){  ?>
                <li>  <?php  echo $video->title; ?> | <?php  echo $video->channel;?></li>
               <!--<video src="<?php echo $video->url ?>" ></video> --> 
            <?php }  ?>
        </ul>
    </main>
    <footer>
        <p>consumiendo videos a traves de la api de dailymotion</p>
    </footer>
</body>
</html>

