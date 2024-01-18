<?
  $nombre = "Rodrigo"; //es una variable
  echo $nombre;
  echo "<br>"; //Rodrigo
  $nombre = "Alejandro";
  echo $nombre; //Alejandro
  echo "<br>";

  define("apellido","Santillan"); //es una constante, no varia
  echo apellido; //Santillan
  echo "<br>";

  define("apellido", "Avila"); //me da error
  echo apellido;
  echo "<br>";
  $apellido = "Luis";
  echo $apellido; //Luis, porque es una variable con el mismo nombre que una constante, pero esto es una variable
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>