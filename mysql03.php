<?
  try{
    $conexion = mysqli_connect("127.0.0.1", "root", "", "prueba1") or die ("Problemas en la conexión");
    
    $registros = mysqli_query($conexion, "select id, nombre, edad, email from profesores") // en SQL: SELECT * FROM `profesores` //* es todos los campos
      or die ("Problemas en el select: ". mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros)){
      echo "Id: $reg[id]";
      echo "<br>";
      echo "Nombre: $reg[nombre]";
      echo "<br>";
      echo "Edad: $reg[edad]";
      echo "<br>";
      echo "Email: $reg[email]";
      echo "<br>";
      echo "<hr>";
    }

    mysqli_close($conexion);
  } catch (error){
    echo "Error: $error";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3 - MySQL</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>