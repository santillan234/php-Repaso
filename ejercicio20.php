<?
  if($_POST){
    print_r($_POST);
    echo "<br>";
    print_r($_FILES['file']['name']); //print_r($_FILES['file']['name']) es para saber solo su nombre, como acceder a la propiedad
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 20 - PHP</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>Input FILE - recepcion archivo</legend>
      <label>Subir archivo</label>
      <br>
      <input type="file" name="file">
      <br>
      <input type="submit" name="enviar">
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>