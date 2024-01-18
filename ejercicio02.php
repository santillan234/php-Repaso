<?
  $string = "Hola";
  $integer = 1;
  $double = 1.1;
  $boolean = true;
  
  $array = array("Rodrigo", "Alejandro"); //vector tradicional
  $array1[0] = "Perro";
  $array1[1] = "Gato";
  $array2[] = "Manzana";
  $array2[] = "Pera";

  $objeto = array( //vector asociativo
    'clave' => 'valor',
    'nombre' => 'Jose',
    'apellido' => 'Avila'
  );
  $objeto1['clave'] = "valor";
  $objeto1['nombre'] = "Alejo";
  $objeto1['apellido'] = "Cheche";

  echo "String: $string";
  echo "<br>";
  echo "Integer: $integer";
  echo "<br>";
  echo "Double: $double";
  echo "<br>";
  echo  "Boolean: $boolean";
  echo "<br>";
  
  print_r($array);
  echo "<br>";
  echo "Array: $array[0] $array[1]";
  echo "<br>";
    //esta es la manera mas correcta de recorrer un array
  foreach($array as $lista){
    echo $lista;
    echo "<br>";
  }
  foreach($array1 as $lista1){
    echo $lista1;
    echo "<br>";
  }
  foreach($array2 as $lista2){
    echo $lista2;
    echo "<br>";
  }
  for ($i = 0; $i < count($array) ;$i++){ //esta es otra forma, pero no es la mas recomendada
    echo $array[$i];
    echo "<br>";
  }

  print_r($objeto);
  echo "<br>";
  echo "Objeto: $objeto[clave] $objeto[nombre] $objeto[apellido]"; //va sin '' porque esta dentro de ""
  echo "<br>";
  foreach($objeto as $clave => $valor){
    echo "$clave: $valor";
    echo "<br>";
  }
  foreach($objeto1 as $clave => $valor){
    echo $valor;
    echo "<br>";
  }
  foreach ($objeto1 as $key => $value) {
    echo $value;
    echo "<br>";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2 - PHP</title>
</head>
<body>
  
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>