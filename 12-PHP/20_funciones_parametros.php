<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Funciones (Parámetros)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Funciones (Parámetros)</h1>
				<hr>
				<?php 
					function show_info($name, $description) {
						echo '<h1 class="display-4">'.$name.'</h1>';
						echo '<p class="lead">'.$description.'</p>';
					}
				?>
				<div class="jumbotron">
				  <div class="container">
				    <?php 
				    	$desc = "One punch man, consectetur adipisicing elit. Fuga amet nesciunt excepturi laboriosam doloremque quidem molestias accusamus voluptas.";
				    	show_info('Saitama Sensei', $desc); 
				    	show_info('Garou', "One punch man season 2"); 
			    	?>
				  </div>
				</div>

			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>