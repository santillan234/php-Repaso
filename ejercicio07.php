<?
  if($_POST){
    $boton = $_POST['boton'];

    /* */
    if($boton == 1){
      echo "Presionó el boton 1 if";
      echo "<br>";
    } else if ($boton == 2) {
      echo "Presionó el boton 2 if";
      echo "<br>";
    } else if ($boton == 3) {
      echo "Presionó el boton 3 if";
      echo "<br>";
    } else if($boton == 4) {
      echo "Presionó el boton 4 if";
      echo "<br>";
    } else {
      echo "No presiono ningun boton if";
    }

    switch($boton){
      case 1:
        echo "Presionó el boton 1 switch";
        echo "<br>";
        break;
      case 2:
        echo "Presionó el boton 2 switch";
        echo "<br>";
        break;
      case 3:
        echo "Presionó el boton 3 switch";
        echo "<br>";
        break;
      case 4:
        echo "Presionó el boton 4 switch";
        echo "<br>";
        break;
      default:
        echo "No presiono ningun boton switch";
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 7 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>if anidado y Switch</legend>
      <input type="submit" name="boton" value="1">
      <input type="submit" name="boton" value="2">
      <input type="submit" name="boton" value="3">
      <input type="submit" name="boton" value="4">
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>