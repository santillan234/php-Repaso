<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP y MySQL</title>
</head>
<body>
  <h1>PHP</h1>
  <h3><a href="ejercicio01.php">Ejercicio 1: echo, concatenar (.) y form => $_POST[''] (oculta los datos) y $_GET[''] (muestra los datos en la url)</a></h2>
  <h3><a href="ejercicio02.php">Ejercicio 2: tipo de datos (string, integer, double, boolean, arrayTradicional, arrayAsociativo)</a></h3>
  <h3><a href="ejercicio03.php">Ejercicio 3: variables ($) echo$ y constantes => define("nombre","valor") echo nombre</a></h3>
  <h3><a href="ejercicio04.php">Ejercicio 4: operadores aritmeticos (+ - / *)</a></h3>
  <h3><a href="ejercicio05.php">Ejercicio 5: operadores relacionales (!= === == >= <= > <)</a></h3>
  <h3><a href="ejercicio06.php">Ejercicio 6: operadores logicos (&& ||)</a></h3>
  <h3><a href="ejercicio07.php">Ejercicio 7: if anidado y switch(){}</a></h3>
  <h3><a href="ejercicio08.php">Ejercicio 8: ciclo for($i = 0; $i < a ; $i++){}, do{} while(condicion) y while</a></h3>
  <h3><a href="ejercicio09.php">Ejercicio 9: function(){} => function nombreDeLaFunction(){} y funciones propias de PHP (matematicas, date, string, array)</a></h3>
  <h3><a href="ejercicio10.php">Ejercicio 10: class (un molde para crear objetos), propiedades (public, private, protected), metodos (function), instancia (creacion del objeto), llamado del metodo, impresion de propiedades </a></h3>
  <h3><a href="ejercicio11.php">Ejercicio 11: class (herencia) => crear una class a partir de otra class => class trabajador extends persona {}. Trabajador es una clase hija de la clase persona</a></h3>
  <h3><a href="ejercicio12.php">Ejercicio 12: class (constructor) => es algo que se construye al inicio automaticamente, no se llama como a cada metodo segun se lo necesite</a></h3>
  <h3><a href="ejercicio13.php">Ejercicio 13: metodos estaticos => son como clases, pero pueden llamarse sin tener una instancia (la creacion del objeto)</a></h3>
  <h1>MySQL</h1>
  <h3><a href="mysql01.php">Ejercicio 1: conexion de base de datos. PHP con MySQL</a></h3>
  <h3><a href="mysql02.php">Ejercicio 2: (POST) insertar datos en una tabla. "insert into dbname_tabla() values ()"</a></h3>
  <h3><a href="mysql03.php">Ejercicio 3: (GET) leer todos los datos de una tabla. "select from dbname_tabla"</a></h3>
  <h1>PHP</h1>
  <h3><a href="ejercicio14.php">Ejercicio 14: variables de session, crear y destruir => session_start() y session_destroy();</a></h3>
  <h3><a href="ejercicio15.php">Ejercicio 15: form - recepcion de datos - valores del input text => $_POST['text'] o $_REQUEST['text']</a></h3>
  <h3><a href="ejercicio16.php">Ejercicio 16: form - recepcion de datos - valores del input radio => $_POST['radio'] o $_REQUEST['radio']</a></h3>
  <h3><a href="ejercicio17.php">Ejercicio 17: form - recepcion de datos - valores del input checkbox => $_POST['checkbox'] o $_REQUEST['checkbox']</a></h3>
  <h3><a href="ejercicio18.php">Ejercicio 18: form - recepcion de datos - valores del input select => $_POST['select'] o $_REQUEST['select']</a></h3>
  <h3><a href="ejercicio19.php">Ejercicio 19: form - recepcion de datos - valores del input textarea => $_POST['textarea'] o $_REQUEST['textarea']</a></h3>
  <h3><a href="ejercicio20.php">Ejercicio 20: form - recepcion de archivo - valores del input file => enctype = "multipart/form-data" => $_FILES[] </a></h3>
  <h3><a href="ejercicio21.php">Ejercicio 21: form - guardar archivo - valores del input file => move_uploaded_file(1erParametro, 2doParametro) </a></h3>
  <h3><a href="ejercicio22.php">Ejercicio 22: JSON decode - funcion para leer archivos de tipos JSON => $jsonContent = '[{},{}]' => $resultado = json_decode($jsonContent) => print_r($resultado)</a></h3>
  <h3><a href="ejercicio23.php">Ejercicio 23: JSON encode - funciona al reves de JSON decode - mostramos en formato json para otras aplicaciones</a></h3>
  <h3><a href="ejercicio24.php">Ejercicio 24: consumir una API</a></h3>
  <h3><a href="ejercicio25.php">Ejercicio 25: funcion include 'prueba.php'; => permite incluir/insertar todo el contenido de otra pagina => CONTINUA A PESAR DEL WARNING</a></h3>
  <h3><a href="ejercicio26.php">Ejercicio 26: funcion require("prueba.php"); (puede ir sin los parentesis como include)=> es lo mismo que include pero con la diferencia que maneja de manera distinta los errores => NO!!! CONTINUA A PESAR DEL WARNING</a></h3>
  <h3><a href="ejercicio27.php">Ejercicio 27: crear un archivo de texto => $ar = fopen("datos.txt", "a") or die("Problemas";) => fputs($ar, $_POST[]); => fclose($ar);</a></h3>
  <h3><a href="ejercicio28.php">Ejercicio 28: leer un archivo de texto => $ar = fopen("datos.txt", "r") or die("Problemas"); => while(!feof($ar)){$linea = fgets($ar); $lineaSalto = nl2br($linea); echo $lineaSalto;} fclose($ar); </a></h3>
</body>
</html>