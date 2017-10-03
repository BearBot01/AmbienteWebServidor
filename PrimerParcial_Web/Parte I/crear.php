
<!DOCTYPE html>
<html>
<head>
	<title>Crea</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<br><br>
	<h2>Cree una nueva entrada</h2>	
	<form method="GET" action="crear.php">
	  <div class="form-group">
		   <input class="form-control" type="text" name="numero"  required placeholder="Numero">
	  </div>
	  <div class="form-group">
		   <input class="form-control" type="text" name="Operador"  required placeholder="Operador">
	  </div>
	  <div class="form-group">
		   <input class="form-control" type="text" name="Plan"  required placeholder="Plan">
	  </div>
	  <div class="form-group">
		   <input class="form-control" type="text" name="Marcacelular"  required placeholder="Marca celular">
	  </div>
	  <div class="form-group">
		   <input class="form-control" type="text" name="Modelo"  required placeholder="Modelo celular">
	  </div>
	  <div class="form-group">
		   <input class="form-control" type="text" name="fecha"  required placeholder="fecha de firma  YY/MM/DD">
	  </div>
	  <div class="form-group">
		   <input class="form-control" type="text" name="plazo"  required placeholder="Plazo">
	  </div>

	  	<button type="submit" class="btn btn-outline-dark float-right btn-lg" name="btn">Crear</button>
	</form>
</div>

</body>
</html>
<?php

	
	$link = new mysqli('localhost','root','','Ambiente');

		if (isset($_GET['btn'])) {
			$num = $_GET['numero'];
			$op = $_GET['Operador'];
			$plan = $_GET['Plan'];
			$marca = $_GET['Marcacelular'];
			$mod = $_GET['Modelo'];
			$fecha = $_GET['fecha'];
			$plazo = $_GET['plazo'];

			$consulta = $link->prepare("INSERT INTO lineas (numero,operador,plan,marcacelular,modelocelular,fechafirmacontrato,plazomeses) values (?,?,?,?,?,?,?)");

			$consulta->bind_param("isssssi",$num,$op,$plan,$marca,$mod,$fecha,$plazo);
			$consulta->execute();

			if($consulta->affected_rows > 0){
				echo "<h2>Agregado con exito!</h2>";
				echo "<a href='index.php' class='badge badge-info'>Regresa</a>";
			}else{
				echo "<h2>Ups! Hubo un error</h2>";
				echo "<a href='index.php' class='badge badge-info'>Regresa</a>";
			}

		}else echo "<a href='index.php' class='badge badge-info'>Regresa</a>";

		$link->close();


?>