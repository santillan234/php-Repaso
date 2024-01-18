<?
//https://catfact.ninja/fact
//api.dailymotion.com/videos?channel=sport&limit=10
  $url = "https://api.dailymotion.com/videos?channel=sport&limit=10"; // es la url donde vamos a consumir la informacion
  $opciones = array(
    "ssl" => array(
      "verify_peer" => false,
      "verify_peer_name" => false)); //esto es porque tiene un https - por seguridad - la lectura a esos sitios seguros - es para desactivar esa compatibilidad para que me deje leer la info

  $respuesta = file_get_contents($url, false, stream_context_create($opciones)); //es una funcion que me permite leer todo el contenido y convertirlo a un string para que nosotros podamos decodificarlo en un formato de objetos y arreglos que nos permita leer esa info que proviene de la api
  //stream_context_create($opciones) con esta funcion lo que hacemos es desactivar la restriccion que tenemos con el https y asi poder leer el contenido.
  $objetoRespuesta = json_decode($respuesta); //aca convertimos la informacion en objeto, ya no esta en json

//  print_r($objetoRespuesta);

  foreach($objetoRespuesta -> list as $video){
    print_r("<strong>Titulo:</strong> ". $video -> title. ". <strong>Canal:</strong> ". $video -> channel);
    echo "<br>";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 24 - PHP</title>
</head>
<body>
  <ul>
    <? 
      foreach($objetoRespuesta -> list as $video){
        echo 
        "<li>"
          .$video -> title. " | ". $video -> channel.  
        "</li>";
      }
    ?>
  </ul>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>
