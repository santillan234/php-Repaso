<?
  function imprimirNombre($nombre){
    echo "Hola $nombre";
  }
  imprimirNombre("Rodrigo"); //aca ejecuto la funcion directamente porque ya tiene un echo dentro
  echo "<br>";
  imprimirNombre("Alejandro");
  echo "<br>";
  imprimirNombre("Alejo");  
  echo "<br>";

  //----------------------------------------------------------------------------------------------------
  function imprimirApellido(){
    return "Hola Santillan";
  }
  echo imprimirApellido(); //aca ejecuto la funcion dentro de un echo porque la function tiene un return
  echo "<br>";
  $imprimir = imprimirApellido(); //aca guardo la funcion dentro de una variable
  echo $imprimir; //aca imprimo la variable que guarda la funcion
  echo "<br>";

  //----------------------------------------------------------------------------------------------------
  function suma($num1,$num2){ //declaro una funcion con dos parametros como argumentos
    $suma = $num1 + $num2;
    echo $suma;
  }
  suma(2,8); //10. ejecuto la funcion y le paso dos parametros
  echo "<br>";
  suma(8,10); //18
  echo "<br>";

  //------------------------------------Funcion date propia de PHP--------------------------------------
  $fechaActual = date("d/m/Y");
  $horaActual = date("H:i:s");
  echo $fechaActual;
  echo "<br>";
  echo $horaActual;
  echo "<br>";

  //--------------------------------Funciones matematicas propias de PHP--------------------------------
  $rand = rand(1,10); //genera un nro aleatorio entero entre 1 y 10
  echo $rand;
  echo "<br>";

  //------------------------------------Funciones Strings propias de PHP--------------------------------
  $string = "rodrigo";
  echo strtoupper($string); //convierte el string en mayuscula
  echo "<br>";

  //------------------------------------Funciones Array propias de PHP--------------------------------
  $array = array("silvio", "rodrigo", "alejandro", "santillan");
  print_r($array); //Array ( [0] => silvio [1] => rodrigo [2] => alejandro [3] => santillan )
  echo "<br>";
  array_push($array, "azucena"); //es para pushear un array, agregar un indice mas, se puede agregar los indices que querramos
  print_r($array); //Array ( [0] => silvio [1] => rodrigo [2] => alejandro [3] => santillan [4] => azucena )
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 9 - PHP</title>
</head>
<body>
  <h3><a href="https://www.php.net/manual/es/funcref.php">Referencia de funciones propias en sitio de PHP - documentación oficial</a></h3>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>