<?
  if($_POST){
    try{
      $conexion = mysqli_connect("127.0.0.1", "root", "", "prueba1") or die ("Problemas en la conexión");
      mysqli_query($conexion, "insert into profesores(nombre, edad, email) values ('$_REQUEST[name]', $_REQUEST[age], '$_REQUEST[email]')")  //en SQL es: INSERT INTO `profesores`(`nombre`, `edad`, `email`) VALUES (NULL, 'Hector', '25', 'asd@gmail.com')
        or die ("Problemas en el select: ". mysqli_error($conexion));
      mysqli_close($conexion);
      echo "El profesor fue dado de alta con exito";
    } catch (error) {
      echo "Error: $error";
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2 - MySQL</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Insertar datos en una tabla - insert into</legend>
      <label>Ingresar nombre</label>
      <input type="text" name="name">
      <br>
      <label>Ingresar edad</label>
      <input type="number" name="age" maxlength="3">
      <br>
      <label>Ingresar email</label>
      <input type="email" name="email">
      <br>
      <button>Enviar</button>
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>