<?
  $personas = array(
    "Oscar"=> 40,
    "Jose"=> 20,
    "marisa"=> 38
  );
  print_r($personas);
  echo "<br>";

  $resultado = json_encode($personas);
  print_r($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 23 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>