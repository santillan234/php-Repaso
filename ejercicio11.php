<?
  class persona {
    public $nombre;
    private $edad;
    protected $altura;
    public function asignarNombre($nuevoNombre){
      $this -> nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
      echo "Hola, soy ". $this -> nombre;
    }
    public function mostrarEdad(){
      $this -> edad = 20;
      return $this -> edad;
    }
  }

  $objetoAlumno = new persona();
  $objetoAlumno -> asignarNombre("Rodrigo");
  echo $objetoAlumno -> nombre;
  echo "<br>";
  $objetoAlumno -> imprimirNombre();
  echo "<br>";
  echo $objetoAlumno -> mostrarEdad();
  echo "<br>";
  print_r($objetoAlumno);
  echo "<br>";

  class trabajador extends persona {
    public $puesto;
    public function presentarse(){
      echo "Hola, soy ". $this -> nombre. " y ocupo el puesto de ".$this -> puesto;
    }
  }

  $objetoTrabajador = new trabajador();
  $objetoTrabajador -> asignarNombre("Julio Rojas");
  $objetoTrabajador -> puesto = "Profesor";
  echo $objetoTrabajador -> nombre;
  echo "<br>";
  echo $objetoTrabajador -> puesto;
  echo "<br>";
  $objetoTrabajador -> imprimirNombre();
  echo "<br>";
  echo $objetoTrabajador -> mostrarEdad();
  echo "<br>";
  $objetoTrabajador -> presentarse();
  echo "<br>";
  print_r($objetoTrabajador);
  echo "<br>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 11 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>