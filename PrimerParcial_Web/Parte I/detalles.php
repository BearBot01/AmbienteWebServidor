<?php

	$link = new mysqli('localhost','root','','ambiente');

	if ($link->connect_errno) {
		echo "<h2>Fallo la conexion con la db</h2>". $link->connect_errno;
	}

	if (isset($_GET['numero'])) {
		$num = $_GET['numero'];

		$query = $link->prepare("SELECT * FROM LINEAS WHERE NUMERO = ?");
		$query->bind_param("i",$num);
		$query->execute();
		$result = $query->get_result();
		$dato = $result->fetch_assoc();
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Detalles</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
	<br><br>
	<div class="container">
	<h1>Datos encontrados</h1>
	<br><br>
		<table class="table table-inverse">
			<thead>
				<tr>
					<td>NUMERO</td>
						<td>OPERADOR</td>
						<td>PLAN</td>
						<td>MARCA CEL</td>
						<td>MODELO CEL</td>
						<td>Fecha de firma</td>
						<td>Plazo</td>
				</tr>
			</thead>
			<tbody>
				<?php
					echo "<tr>
								<td>".$dato['numero']."</td>
								<td>".$dato['operador']."</td>
								<td>".$dato['plan']."</td>
								<td>".$dato['marcacelular']."</td>
								<td>".$dato['modelocelular']."</td>
								<td>".$dato['fechafirmacontrato']."</td>
								<td>".$dato['plazomeses']."</td>	
							</tr>";	
					$link->close();		
				?>
			</tbody>
		</table>
		<a class="btn btn-outline-dark btn-lg" href="index.php" role="button" >Regresa</a>
	</div>
</body>
</html>