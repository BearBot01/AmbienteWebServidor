<?php

	$fecha = $_POST['fecha'];

	$dia = date('d', strtotime($fecha));

	$mes = date('m', strtotime($fecha));

	$año = date('Y', strtotime($fecha));

	$dia_semana = date('l', mktime(0,0,0,$mes,$dia,$año));

	if ($dia_semana == 'Monday') {
			if ( $dia >31) {
				$dia_semana = ($dia + 1)-30;
			}else{
				$dia_semana = ($dia + 1);
			}
		}elseif ($dia_semana == 'Tuesday') {
			if ( $dia >24) {
				$dia_semana = ($dia + 7)-30;
			}else{
				$dia_semana = ($dia + 7);
			}
		}elseif ($dia_semana == 'Wednesday') {
			if ( $dia >25) {
				$dia_semana = ($dia + 6)-30;
			}else{
				$dia_semana = ($dia + 6);
			}
		}elseif ($dia_semana == 'Thursday') {
			if ( $dia >26) {
				$dia_semana = ($dia + 5)-30;
			}else{
				$dia_semana = ($dia + 5);
			}
		}elseif ($dia_semana == 'Friday') {
			if ( $dia >27) {
				$dia_semana = ($dia + 4)-30;
			}else{
				$dia_semana = ($dia + 4);
			}
		}elseif ($dia_semana == 'Saturday') {
			if ( $dia >28) {
				$dia_semana = ($dia + 3)-30;
			}else{
				$dia_semana = ($dia + 3);
			}
		}elseif ($dia_semana == 'Sunday') {
			if ( $dia >29) {
				$dia_semana = ($dia + 2)-30;
			}else{
				$dia_semana = ($dia + 2);
			}
		}else{
			$dia_semana = "Ingrese un formato valido";
		}	

?>
<!DOCTYPE html>
<html>
<head>
	<title>La fecha</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<br><br>
<div class="container">
	<div class="jumbotron">
		<h1 class="display-3">La <i class="fa fa-clock-o" aria-hidden="true"></i> del proximo martes es:</h1>
		<p class="lead">
			<b><?php echo $dia_semana; ?></b>
		</p>
		<hr class="my-4">
		
		<p class="lead">
		<a class="btn btn-primary  pull-right" href="ejercicio_7.html" role="button">Regresa!!!</a>
		</p>
	</div>
</div>

</body>
</html>