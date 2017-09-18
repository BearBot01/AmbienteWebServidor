<?php

	$correo = $_POST['email'];
	
	$arroba = strpos($correo, '@');

	$aux = strlen($correo) - $arroba -1;

	$mensaje = '';

	$top = '';

	if (strpos($correo, '@') === false) {
		$mensaje =  "<h2>Asegurese de que haya un @</h2>";
		$top = 'Incorrecto!';
	}elseif (!strstr($correo,'@',true)) {
		$mensaje = "<h2>Asegurese de que hayan caracteres antes del @</h2>";
		$top = 'Incorrecto!';
	}elseif ($aux <= 0) {
		$mensaje = "<h2>Asegurese de que hayan caracteres despues del @</h2>";
		$top = 'Incorrecto!';
	}elseif (strpos($correo, '.') === false) {
		$mensaje ="<h2>Asegurese de que se encuentre un '.' </h2>";
		$top = 'Incorrecto!';
	}
	else{
		$mensaje = "<h2>Bienvenido has validado tu correo correctamente</h2>";
		$top = 'Felicidades!';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>El resultado</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
	<br><br>
<div class="container">
	<div class="jumbotron">
		<h1 class="display-3"><?php echo "$top"; ?></h1>
		<p class="lead">
			<?php  
				echo "$mensaje";
			?>
		</p>
		<hr class="my-4">
		
		<p class="lead">
		<a class="btn btn-primary " href="ejercicio_5.html" role="button">Regresa!!!</a>
		</p>
	</div>
</div>

</body>
</html>