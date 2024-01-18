<?
  if ($_POST){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2) {
      echo "El primer valor es mayor que el segundo";
      echo "<br>";
    } else {
      echo "El segundo valor es mayor que el primero";
      echo "<br>";
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 5 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Operadores Relacionales</legend>
      <label>Ingrese el primer valor</label>
      <input type="text" name="num1">
      <br>
      <label>Ingrese el segundo valor</label>
      <input type="text" name="num2">
      <br>
      <button>Calcular</button>
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>