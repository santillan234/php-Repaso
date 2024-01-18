<?
  if($_POST){
    print_r($_POST);
    echo "<br>";
    print_r($_FILES['archivo']['name']);

    //utilizamos esta funcion para obtener el archivo original temporal y luego lo copiamos al 2do parametro tal cual con el nombre original
    //se copia en esta misma carpeta
    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']); //tmp_name es el nombre temporal, el nombre que identifica el sistema al archivo, el nombre original. La segunda propiedad del argumento es como vamos a guardar el archivo
    echo "<br>";
    echo "<strong>Archivo guardado con exito</strong>";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 21 - PHP</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>Input FILE - guardar archivo</legend>
      <label>Subir archivo</label>
      <br>
      <input type="file" name="archivo">
      <br>
      <input type="submit" name="enviar" value="Enviar">
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>