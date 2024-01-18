<?
  class UnaClase{
    public static function unMetodo(){
      echo "Hola, soy un metodo estatico";
    }
    public static function otroMetodo($nombre){
      echo "Hola, soy $nombre";
    }
  }

  $objeto = new UnaClase(); //aca lo instanciamos de forma tradicional
  $objeto -> unMetodo(); //accedemos al metodo de forma tradicional
  echo "<br>";

  UnaClase::unMetodo(); //aca accedemos con el metodo estatico
  echo "<br>";
  UnaClase::otroMetodo("Rojelio");

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 13 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>