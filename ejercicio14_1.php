<?  
  //esta instruccion nos sirve para mantener informacion en cualquier pagina mientras el navegador este abierto
  //esta session desaparece cuando yo cierro el navegador
  session_start();

  //estas variables de session yo la cree aqui en este archivo pero la puedo utilizar en los archivos que yo lo desee siempre y cuando inicie  session_start();
  $_SESSION['user'] = "Santillane"; //estoy creando lo que es una variable tipo session
  $_SESSION['status'] = "Logueado"; //este dato puede ser cualquiera que tu desees, numerico, strings,etc

  echo "Sesion iniciada";
  echo "<br>";
  echo "Usuario: $_SESSION[user]";
  echo "<br>";
  echo "Estatus: $_SESSION[status]";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Session</title>
</head>
<body>
  <h1><a href="ejercicio14.php">Volver</a></h1> 
</body>
</html>