<?
  for($i = 0; $i < 5; $i++){
    echo "for: $i";
    echo "<br>";
  }

  $a = 5;
  do{ //primero imprime y luego pregunta la condicion. Hago y luego pregunto
    echo "do while: $a <br>";
    $a++;
  } while ($a < 10);

  $d = 0;
  while($d < 10){
    echo "while: $d"; //primero pregunto y luego imprimo
    echo "<br>";
    $d++;
  };
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 8 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>