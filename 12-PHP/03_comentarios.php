<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Comentarios</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Comentarios</h1>
				<hr>
				<?php 
				// Definimos las clases del boton
				$clases = "btn btn-lg btn-block btn-outline-primary";
				/*
					btn                = Boton
					btn-lg              = Boton Grande
					btn-block           = Boton Bloque
					btn-outline-primary = Boton de borde Azul
				*/
				# Se imprime la variable $clases dentro de class
				?>
				<a href="javascript:;" class="<?=$clases?>"> Esto es un Boton </a>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>