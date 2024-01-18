<?

  $name = "";
  $radio = "";

  if($_POST){
    $name = (isset($_POST['name'])) ? $_POST['name'] : ""; //existe $_POST['name'] ? si true entonces reemplaza el valor, si false, dejalo vacio
    $radio = (isset($_POST['radio'])) ? $_POST['radio'] : "";

    echo "<strong>Nombre:</strong> $name";
    echo "<br>";
    echo "<strong>Sabor de helado:</strong> $radio";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 16 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Input text / radio</legend>
      <label>Ingrese su nombre</label>
      <input type="text" name="name" value=<?echo $name;?>>
      <br>
      <label>¿Que sabor de helado te gusta?:</label>
      <br>
      <label for="frutilla">Frutilla</label>
      <input type="radio" name="radio" id="frutilla" value="frutilla" <?echo ($radio === "frutilla") ? "checked" : "";?>>
      <label for="vainilla">Vainilla</label>
      <input type="radio" name="radio" id="vainilla" value="vainilla" <?echo ($radio === "vainilla") ? "checked" : "";?>>
      <label for="chocolate">Chocolate</label>
      <input type="radio" name="radio" id="chocolate" value="chocolate" <?echo ($radio === "chocolate") ? "checked" : "";?>>
      <br>
      <button>Enviar</button>
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>