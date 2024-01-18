<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="form.php">
		<fieldset>
			<label>Ingrese su nombre:</label>
			<input type="text" name="name">
			<br>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>

	<?
		$lista = array("Rodrigo", "Alejandro", "Silvio");
		$objeto = array(
			'nombre' => 'Dulce',
			'dni' => 40150245,
			'sexo' => "Femenino"
		);
		
		foreach($lista as $list){
			echo $list;
			echo "<br>";
		}

		foreach($objeto as $clave => $valor) {
			echo $clave. ": ". $valor;
			echo "<br>";
		}
	?>
	
	<form method="post" action="form.php">
		<fieldset>
			<label>Ingrese el primer valor: </label>
			<input type="text" name="num1">
			<br>
			<label>Ingrese el segundo valor: </label>
			<input type="text" name="num2">
			<br>
			<label>Ingrese el tercer valor: </label>
			<input type="text" name="num3">
			<br>
			<label>Ingrese el cuarto valor: </label>
			<input type="text" name="num4">
			<br>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
</body>

</html>
