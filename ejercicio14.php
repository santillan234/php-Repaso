<?
  session_start();
  
  if( isset($_SESSION['user'])){

    echo "Usuario: $_SESSION[user]";
    echo "<br>";
    echo "Estatus: $_SESSION[status]";
  } else {
    echo "La sesion no esta creada";
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 14 - PHP</title>
</head>
<body>
  <h3><a href="ejercicio14_1.php">Crear Session</a></h3>
  <h3><a href="ejercicio14_2.php">Destruir Session</a></h3>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>