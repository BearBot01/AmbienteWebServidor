<?php 

		if (isset($_POST['btn'])) {
				
			$num1 = 1;

			$aux = 0;

			$tope = $_POST['Numero'];

		
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

	<table class="table table-inverse">
		<thead>
			<tr>
				<th style="text-align: center;" >La secuencia Fibonacci</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i = 0; $i < $tope; $i++ ){

				$suma = $num1 + $aux;
				$num1 = $aux;
				$aux = $suma;
				echo " <tr><td>$suma</td></tr>";
				}
			?>
		</tbody>		
	</table>

	<a href="ejercicio_2.html"><button class="btn btn-primary">Devuelvete!</button></a>

	</div>

</body>
</html>