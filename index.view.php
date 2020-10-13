<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro de hora y salida</title>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<?php
				 date_default_timezone_set('America/Mexico_City');
				 $time = date("Y-m-d H:i:s");
				 //echo "$time";

			?>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

	<div class="wrap">
		<form action="registro.php" method="post">

			<h1 class="titulo">
				<img src="img/empleado.png" class="imagen" align="left" height="45px">  Empresa XYZ
				
				<label><br><input type="datetime" name="time" value="<?= $time ?>" readonly=»readonly» /></label> 
			</br>
			</h1>	
			<input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Número de empleado:" value="" required="Ingresa Nombre">
			</br>
			<input type="radio" name="hr" value="Entrada" required>Entrada </br></br>
			<input type="radio" name="hr" value="Salida" required>Sálida
			<input type="submit" name="submit" class="btn-enviar" value="Enviar">

		</form>		
	</div>
</body>	
</html>
