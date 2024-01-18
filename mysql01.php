<?
  $servername = "127.0.0.1";
  $username = "root";
  $userpassword = "";
  $dbname = "prueba";

  try{
    $conexion = mysqli_connect($servername, $username, $userpassword, $dbname) or die ("Problemas en la conexión");
    mysqli_close($conexion);
  
    echo "Conexión establecida";  
  } catch (error) {
    echo "Error: $error";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1 - MySQL</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>