<?
  $name = "";
  $select = "";

  if ($_POST){
    $name = (isset($_POST['name']) ? $_POST['name'] : "");
    $select = (isset($_POST['helado']) ? $_POST['helado'] : "");
  }
  echo "Nombre: $name";
  echo "<br>";
  echo "Gusto de helado preferido: $select";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 18 -PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Input text/ select</legend>
      <label>Ingrese su nombre:</label>
      <input type="text" name="name" value=<? echo $name ?>>
      <br>
      <label>Que sabor de helado te gusta?</label>
      <select name="helado">
        <option value="frutilla" <? echo (($select === "frutilla") ? "selected" : "" ) ?>>Frutilla</option>
        <option value="chocolate" <? echo (($select === "chocolate") ? "selected" : "" ) ?>>Chocolate</option>
        <option value="vainilla" <? echo (($select === "vainilla") ? "selected" : "" ) ?>>Vainilla</option>
      </select>
      <br>
      <input type="submit" value="Enviar">
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>