<?
  if ($_POST){
    $suma = $_POST['num1'] + $_POST['num2'];
    $resta = $_POST['num1'] - $_POST['num2'];
    $multiplicacion = $_POST['num1'] * $_POST['num2'];
    $division = $_POST['num1'] / $_POST['num2'];
  
    echo "La suma es: $suma";
    echo "<br>";
    echo "La resta es: $resta";
    echo "<br>";  
    echo "La multiplicacion es: $multiplicacion";
    echo "<br>";
    echo "La division es: $division";
    echo "<br>";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio4 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Operadores Aritmeticos</legend>
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