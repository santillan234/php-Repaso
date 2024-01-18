<?
  class alumno {
    public $nombre;
    private $edad;
    protected $altura;
    public function asignarNombre ($nuevoNombre){
      $this -> nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
      echo "Hola, soy ". $this -> nombre;
    }
    public function mostrarEdad(){
      $this -> edad = 25;
      return $this -> edad;
    }
  }

  $objetoAlumno = new alumno();
  $objetoAlumno -> asignarNombre("Romualdo");
  echo $objetoAlumno -> nombre;
  echo "<br>";
  $objetoAlumno -> imprimirNombre();
  echo "<br>";
  echo $objetoAlumno -> mostrarEdad();
  echo "<br>";
  print_r($objetoAlumno);
  echo "<br>";

  //---------------------Constructor----------------------------------
  //sirve como por ejemplo para ya no pasarle el nombre por un metodo como en la class alumno. Lo que quiero es pasarle el nombre ya a partir de la instancia, es decir, la creacion del objeto
  //el constructor es un metodo que cuando se crea la clase se construye automaticamente al inicio, no como los otros metodos que hay que llamarlos para ejecutarlos
  //Es decir, un constructor se inicia de forma automatica sin llamarlo. A los otros metodos hay que llamarlos para ejecutarlos
  //construye a partir de la instancia el objeto
?>

<?
  class profesor {
    public $nombre;
    private $edad;
    protected $altura;
    function __construct($nuevoNombre){
      $this -> nombre = $nuevoNombre; //para asignar un nombre para cuando se construya la aplicacion. Esto es para que en la instacia ya le pueda pasar como parametro el nombre
    }
    public function asignarNombre ($nuevoNombre){
      $this -> nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
      echo "Hola, soy ". $this -> nombre;
    }
    public function mostrarEdad(){
      $this -> edad = 25;
      return $this -> edad;
    }
  }

  $objetoProfesor = new profesor("Rodrigo Santillan"); //cuando se creo la instancia la asignacion se hizo de forma automatica con el parametro que le pasamos
  $objetoProfesor -> imprimirNombre();
  echo "<br>";
  print_r($objetoProfesor);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 12 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1> 
</body>
</html>