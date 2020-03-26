<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reto (Fechas)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-4 offset-md-4">
				<h1 class="text-center text-dark">Reto (Fechas)</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<label for="birthdate"> Fecha Nacimiento </label>
						<input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="mm/dd/yyyy">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-outline-success"> Calcular Edad </button>
					</div>
				</form>
				<?php 
					if($_POST) {
						//$bd    = $_POST['birthdate'];
						//$day   = substr($bd, 0, 2);
						//$month = substr($bd, 3, 2);
						//$year  = substr($bd, 6, 4);

						$day   = date('d', strtotime($_POST['birthdate']));
						$month = date('m', strtotime($_POST['birthdate']));
						$year  = date('Y', strtotime($_POST['birthdate']));

						$born  = mktime(0, 0, 0, $month, $day, $year);
						$today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

						$years  = $today - $born;
						$years  = ( ( ( ( $years / 60 ) / 60 ) / 24 ) / 365 );

						echo '<div class="alert alert-success">
								<div class="lead">
									'.floor($years).' Años
								</div>
							  </dia>';
					}
				?>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>