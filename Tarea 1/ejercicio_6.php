<?php

	$peso = $_POST['peso'];

	$estatura = $_POST['estatura'] * 0.01;

	$imc = $peso / ($estatura*$estatura);

	$imc = number_format($imc,2,'.','');

	$decision = "";

	if ($imc < 18.50) {
		$decision = "Usted debe de comer más";
	}elseif ($imc >= 18.50 && $imc <= 24.99  ) {
		$decision = "Usted se encuentra bien";
	}elseif ($imc >=25.00) {
		$decision = "Usted se encuentra en etapa de sobrepeso";
	}elseif ($imc >= 30.00) {
		$decision = "Usted se encuentra en etapa de obesidad";
	}elseif ($imc >= 40.00) {
		$decision = "Usted se encuentra en obesidad Mórbida";
	}

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
		<div class="row">
			<div class="col-md-7">
				<div class="jumbotron">
					<h1 class="display-3">Su IMC es: <?php echo $imc; ?></h1>
					<p class="lead">
						<?php  
						echo "$decision";
						?>
					</p>
					<hr class="my-4">
				
					<p class="lead">
					<a class="btn btn-primary " href="ejercicio_6.html" role="button">Regresa!!!</a>
					</p>
				</div>
			</div>
			<div class="col-md-5">
				<img src="http://3.bp.blogspot.com/-BKWxdiov00Q/Tml3st3Z_NI/AAAAAAAAAP0/N6ulB7gwl-A/s1600/Indicede%2Bmasa.png" class="img-fluid">
			</div>	
		</div>
	</div>	

</body>
</html>