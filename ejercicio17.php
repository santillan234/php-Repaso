<?
  $name = "";
  $checkboxPhp = "";
  $checkboxReact = "";

  if ($_POST){
    $name = (isset($_POST['name']) ? $_POST['name'] : "" );
    $checkboxPhp = (isset($_POST['php']) ? $_POST['php'] : "" );
    $checkboxReact = (isset($_POST['react']) ? $_POST['react'] : "" );
  }

  echo "<strong>Nombre:</strong> $name";
  echo "<br>";
  echo "<strong>Lenguaje Favorito:</strong>";
  echo "<br>";
  echo $checkboxPhp;
  echo "<br>";
  echo $checkboxReact;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 17 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Input text/ checkbox</legend>
      <label>Ingrese su nombre</label>
      <input type="text" name="name" value=<? echo $name ?>>
      <br>
      <label>Que lenguaje te gusta?</label>
      <label for="php">PHP</label>
      <input type="checkbox" name="php" id="php" value="PHP" <?echo (isset($_POST['php']) ? "checked" : "");?>>
      <label for="react">React</label>
      <input type="checkbox" name="react" id="react" value="React" <?echo (isset($_POST['react']) ? "checked" : "");?>>
      <br>
      <input type="submit" value="Enviar">
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>