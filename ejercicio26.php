<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 26 - PHP</title>
</head>
<body>
  <?
    //si hay un error al inicio, la pagina no sigue, se queda en el error
    //pero si hay un error al final la pagina si lee el inicio
    require("ejercicio1400.php");
    require("ejercicio24.php");
    echo "<hr>";
    require("ejercicio1400.php");

    //tambien esta el require_once, es para evitar que copies dos ejercicios. Es decir, que de las siguientes 2 instrucciones solo se va a ejecutar una, no las dos 
    //require_once("prueba.php");
    //require_once("prueba.php);
  ?>
</body>
</html>