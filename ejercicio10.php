<?
  //estamos creando una clase, una clase es como un molde de muchas personas que nos sirve para crear objetos
  class persona {
    public $nombre; //estamos creando propiedades para utilizar dentro de la clase
    private $edad; //es una propiedad que solo se puede acceder por la clase pero va a tener ciertas restricciones a la hora de invocarla. Esta propiedad privada solo puede ser utilizada por los metodos o alteradas dentro de la class. Es decir, no vamos a poder imprimir el valor como en el caso de public
    protected $altura; //en este caso los accesos estan protegidos y privados. La diferencia con private es que solo se puede acceder desde la clase que lo definio y la clase heredada. En cambio private, solo desde la clase que lo definio
    public function asignarNombre($nuevoNombre){ //estoy creando un metodo y los metodos son como acciones. Acciones o metodos
      $this -> nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
      echo "Hola, soy ". $this -> nombre;
    }
    public function mostrarEdad () {
      $this -> edad = 20;
      return $this -> edad; //de esta manera si podemos acceder a la propiedad edad que esta en private
    }
  }

  $objetoAlumno = new persona(); //creamos un objeto a partir de la definicion de la clase de arriba. //esto se llama instancia o creacion de un objeto
  $objetoAlumno -> asignarNombre("Oscar"); //ahora a traves del objeto recien creado accedemos a la funcion que esta dentro de class y le asignamos un nombre. llamamos a un metodo
  print_r($objetoAlumno); //persona Object ( [nombre] => Oscar )
  echo "<br>";
  echo $objetoAlumno -> nombre; //imprimimos una propiedad; Oscar. La podemos imprimir porque es public, si es private no podriamos
  echo "<br>";
  $objetoAlumno -> imprimirNombre(); //Hola, soy Oscar
  echo "<br>";
  echo $objetoAlumno -> mostrarEdad(); //20
  echo "<br>";


  $objetoProfesor = new persona();
  $objetoProfesor -> asignarNombre("Dulce");
  echo $objetoProfesor -> nombre; //Dulce
  echo "<br>";
  $objetoProfesor -> imprimirNombre(); //Hola, soy Dulce
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 10 - PHP</title>
</head>
<body>
  <h1><a href="index.php">Volver</a></h1>
</body>
</html>

















