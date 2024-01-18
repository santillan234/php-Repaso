<?
  //----------------------EJERCICIO 1-------------------------------------------
  /* 
    comentario de mas de una sola linea
  */
  echo "Hola Mundo";
  echo "<br>";
  print_r("Hola Mundo"); //imprime cualquier informacion sin importar el formato
  echo "<br>";
  print("Hola Mundo");
  echo "<br>";

  //----------------------EJERCICIO 2-------------------------------------------

  if ($_POST){
    $nombre = $_POST['nombrePOST']; //este metodo oculta los datos de la url y lo recepciona, lo contrario a get
    echo "Hola POST ". $nombre;
    echo "<br>";
  }

  if ($_GET){
    $nombre = $_GET['nombreGET']; //la diferencia entre post y get, es que get se enviar como una query y se muestra como una ruta en la url, el dato se envio como una url
    echo "Hola GET ". $nombre;
    echo "<br>";
  }

  if ($_POST) {
    $nombre = $_POST['name'];
    $apellido = $_POST['last_name'];
    echo "Hola $nombre $apellido";
    echo "<br>";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1 - PHP</title>
</head>
<body>
  <form method="post" action=""> <!--si action dejo vacio si envia los datos a la misma pagina -->  
    <fieldset>
      <legend>Metodo POST</legend>
      <label>Ingrese su nombre</label>
      <input type="text" name="nombrePOST">
      <button>Enviar</button>
    </fieldset>
  </form>

  <form action="ejercicio1.php" method="get">
    <fieldset>
      <legend>Metodo GET</legend>
      <label>Ingrese su nombre</label>
      <input type="text" name="nombreGET">
      <button>Enviar</button>
    </fieldset>
  </form>
  
  <form action="" method="post">
    <fieldset>
      <legend>Concatenar (.)</legend>
      <label>Ingrese su nombre</label>
      <input type="text" name="name">
      <br>
      <label>Ingrese su apellido</label>
      <input type="text" name="last_name">
      <br>
      <button>Enviar</button>
    </fieldset>
  </form>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>