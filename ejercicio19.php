<?
  $name = "";
  $comentario = "";

  if ($_POST){
    $name = ( isset($_POST['name']) ? $_POST['name'] : "" );
    $comentario = ( isset($_POST['comentario']) ? $_POST['comentario'] : "" );

    echo "Nombre: $name";
    echo "<br>";
    echo "Tu comentario es: $comentario";
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 19 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Input text / textarea</legend>
      <label>Ingresa tu nombre:</label>
      <input type="text" name="name">
      <br>
      <label>Ingresa un comentario</label>
      <br>
      <textarea name="comentario" cols="10" rows="5"></textarea>
      <br>
      <input type="submit">
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>