<?
  if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
  
    if ($num1 == $num2 && "a" == "a") { //para que de true, ambos tienen que dar true si o si
      echo "Verdadero, son  iguales";
    } else {
      echo "Falso, son distintos";
    }
    echo "<br>";
    if ($num1 == $num2 || "a" != "a"){ //para que de true, al menos uno de los dos debe ser true, no es necesario que los dos sean
      echo "Verdadero, son iguales";
    } else {
      echo "Falso, son distintos";
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 6 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Operadores Logicos</legend>
      <label>Ingrese el primer valor</label>
      <input type="text" name="num1">
      <br>
      <label>Ingrese el segundo valor</label>
      <input type="text" name="num2">
      <br>
      <button>Enviar</button>
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>