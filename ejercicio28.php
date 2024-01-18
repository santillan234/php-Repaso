<?
  $ar = fopen("datos.txt", "r") or die("Problemas en la lectura");
  while(!feof($ar)){
    $linea = fgets($ar);
    $lineaSalto = nl2br($linea);
    echo $lineaSalto;
  }
  fclose($ar);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 28 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>

<?
  $archivo = "datos.txt";
  $archivoAbierto = fopen($archivo, "r"); //es para abrir el archivo
  $contenido = fread($archivoAbierto, filesize($archivo)); //para leer el contenido del archivo una vez abierto
  echo $contenido;
?>