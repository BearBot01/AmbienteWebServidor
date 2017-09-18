<?php 
	 
	 if (isset($_POST['btn'])) {
	 	
	 	$salario = $_POST['horas'] *40;

	 	$caja = $salario * 0.09;

	 	$neto = $salario - $caja;

	 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>En respuesta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
	<br><br>
	<div class="container">

	<table class="table table-striped table-inverse">
		<thead>
			<tr>
				<th>#</th>
  				<th>Salario Bruto</th>
  				<th>Rebajo de la caja</th>
  				<th>Salario Neto</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td><?php echo number_format($salario) ?></td>
				<td><?php echo number_format($caja) ?></td>
				<td><?php echo number_format($neto) ?></td>
			</tr>
		</tbody>
	</table>

	<a href="ejercicio_3.html"><button class="btn btn-primary">Devuelvete!</button></a>

	</div>

</body>
</html>