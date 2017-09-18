<?php 
	
	if (isset($_POST['btn'])) {
			
		$subtotal = $_POST['sub-total'];

		$pago = $_POST['pago'];

		$impuesto = $subtotal * 0.13;

		$total = $subtotal + $impuesto;

		$vuelto = $pago - $total;

		}	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Devuelve</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
	<br><br>
	<div class="container">

	<table class="table table-striped table-inverse">
		<thead>
			<tr>
				<th>Subtotal</th>
				<th>Impuesto</th>
				<th>Total</th>
				<th>Paga con</th>
				<th>Su vuelto</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $subtotal  ?></td>
				<td><?php echo $impuesto  ?></td>
				<td><?php echo $total  ?></td>
				<td><?php echo $pago  ?></td>
				<td><?php echo $vuelto  ?></td>
			</tr>
		</tbody>
	</table>

	<a href="ejercicio_1.html"><button class="btn btn-primary">Devuelvete!</button></a>

	<?php
		if ($vuelto < 0) {
			echo "<h3>Faltó dinero, soliciteselo al cliente</h3>";
		}

	?>

	</div>


</body>
</html>