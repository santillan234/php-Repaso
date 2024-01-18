<?
  $name = $_REQUEST['name'];
  echo $name;
  echo "<br>";

  foreach($_REQUEST as $clave => $valor){
    echo $clave. ": ". $valor;
    echo "<br>";
  }
?>