<?
  //primero creamos una variable con formato JSON
  // las apis suelen manejar este tipo de formato
  $jsonContenido = '[
    {"nombre": "Rodrigo", "apellido": "Santillan"},
    {"nombre": "Azucena", "apellido": "Avila"},
    {"nombre": "Pichon", "apellido": "Luis"}
  ]';

  //json_decode es una funcion que me permite decodificar un archivo json en un objeto o un array
  $resultado = json_decode($jsonContenido);
  print_r($resultado);
  echo "<br>";

  foreach($resultado as $personas){
    print_r($personas -> nombre. " " . $personas -> apellido ."<br>");
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 22 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>