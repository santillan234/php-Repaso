<?

  if($_POST){
    $ar = fopen("datos.txt", "a") or die ("Problemas en la creación");
    fputs($ar, $_REQUEST['name']);
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['comentarios']);
    fputs($ar, "\n");
    fputs($ar, "--------------------------------------------------------");
    fputs($ar, "\n");
    fclose($ar);
  
    echo "Los datos se cargaron correctamente";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 27 - PHP</title>
</head>
<body>
  <form action="" method="post">
    <fieldset>
      <legend>Grabar datos en un archivo txt</legend>
      <label>Ingrese su nombre:</label>
      <input type="text" name="name">
      <br>
      <label>Ingrese sus comentarios:</label>
      <br>
      <textarea name="comentarios" cols="25" rows="8"></textarea>
      <br>
      <input type="submit" value="Guardar datos">
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>