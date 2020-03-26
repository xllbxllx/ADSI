<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Filtros</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center text-dark">Filtros</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="age" placeholder="Ingresar la Edad">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Ingresar Correo Electrónico">
					</div>
					<div class="form-group">
						<input type="url" class="form-control" name="url" placeholder="Ingresar Dirección de Internet">
					</div>
					<div class="form-group">
						<input type="submit" value="Aplicar Filtros" class="btn btn-success">
					</div>
				</form>
				<?php 
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						// AGE - - - - - - - - - - - - - - - - -
						$age = $_REQUEST['age'];
						$ops = array('options' => 
							   array('min_range' => 18, 
							   	     'max_range' => 23
							   	)
							);
						if (!filter_var($age, FILTER_VALIDATE_INT, $ops)) {
							echo '<div class="alert alert-danger">
									No Puede Participar en WSI!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									Puede Participar en WSI!
								  </div>';
						}
						// EMAIL - - - - - - - - - - - - - - - - -
						if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
							echo '<div class="alert alert-danger">
									El correo electrónico no es valido!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									El correo electrónico es valido!
								  </div>';
						}
						// URL - - - - - - - - - - - - - - - - -
						$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
						echo '<div class="alert alert-success">
								La URL desinfectada es: '.$url.'
							  </div>';
					}
				?>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>