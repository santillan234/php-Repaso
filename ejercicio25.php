<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 25 - PHP</title>
</head>
<body>
  <?
    
    //esta funcion si hay error te muestra el warning, pero las instrucciones siguientes de esta misma pagina si se pueden ver normalmente
    include 'ejercicio24a.php';
    include 'ejercicio24.php';
    echo "<hr>";
    include 'ejercicio25_1.php';
    
    //tambien esta el include_once, es para evitar que copies dos ejercicios. Es decir, que de las siguientes 2 instrucciones solo se va a ejecutar una, no las dos 
    //include_once("prueba.php");
    //include_once("prueba.php);
  ?>
</body>
</html>