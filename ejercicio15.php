<?
  if($_POST){
    echo "<strong>Nombre</strong>: $_POST[name]";
    echo "<br>";
    echo "<strong>Edad</strong>: $_POST[age]";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 15 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Input text</legend>
      <label>Ingrese su nombre</label>
      <input type="text" name="name" value="<? echo $_POST ? $_POST['name'] :""; ?>">
      <br>
      <label>Ingrese su edad</label>
      <input type="number" name="age">
      <br>
      <button>Enviar</button>
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>