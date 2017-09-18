<?php

	$diametro = $_POST['diametro'];

	$area = pi() * ($diametro*$diametro/4);
	
	$circunferencia = pi() *  $diametro;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>

	<br><br>
	<div class="container">

		<h2>Datos..!</h2>
		
	<table class="table table-inverse">
		<thead>
			<tr>
				<th>Diametro</th>
				<th>Circunferencia</th>
				<th>Area</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $diametro ?></td>
				<td><?php echo $circunferencia ?></td>
				<td><?php echo $area ?></td>
			</tr>
		</tbody>
	</table>

	<a href="ejercicio_4.html"><button class="btn btn-primary">Devuelvete!</button></a>

	</div>

</body>
</html>