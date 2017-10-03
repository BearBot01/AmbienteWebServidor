<?php

//Iniciamos la conexion con la db

	$link = new mysqli('localhost','root','','ambiente');

	if ($link->connect_errno) {
		echo "<h2>Fallo la conexion con la db</h2>". $link->connect_errno;
	}

	$sql = 'SELECT * FROM Lineas ';

	$return = $link->query($sql);

	if ($link->errno) {
		die($link->error);
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de elementos</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

</head>
<body>
	<br>
	<div class="container">
		<h1>Linea telefonica WebServidor  <small>Consulte la base de datos</small></h1>
		<br><br>
		<table class="table table-hover">
			<thead class="alert alert-info">
				<tr>
					<td>Numero</td>
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
					while ($element = $return->fetch_assoc() ) {
						$url = 'detalles.php?numero='.$element['numero'];
						echo "<tr>
									<td><a href='$url'>".$element['numero']."</a></td><td>
									".$element['operador']	."</td><td>
									".$element['plan']."</td><td>
									".$element['marcacelular']."</td><td>
									".$element['modelocelular']."</td><td>
									".$element['fechafirmacontrato']."</td>
										<td>
									".$element['plazomeses']."</td>
								</tr>";
					}
					$link->close();
				?>
			</tbody>
		</table>
		<br><br>
			<a class="btn btn-primary" role="button" href="crear.php">Crear nueva entrada</a>
						
			
	</div>



</body>
</html>