<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cadenas</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Cadenas</h1>
				<hr>
				<?php 
					// Concatenar
					$tbl1  = 'table';
					$tbl2  = 'table-bordered';
					$tbl3  = 'table-hover table-dark';
					$class = $tbl1." ".$tbl2." ".$tbl3." table-stripped";
					// Cadenas
					$string1 = "ADSI 1804230";
					$string2 = "sena caldas";
					$string3 = "Hola Mundo";

				?>
				<table class="<?php echo $class; ?>">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Método</th>
							<th>Descripción</th>
							<th>Cadena</th>
							<th>Resultado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>strlen()</td>
							<td>Logitud de Cadena</td>
							<td><?php echo $string1; ?></td>
							<td><?php echo strlen($string1); ?></td>
						</tr>
						<tr>
							<td>strpos()</td>
							<td>Posición Coinciden Cadenas</td>
							<td>1804230</td>
							<td><?php echo strpos($string1, '1804230'); ?></td>
						</tr>
						<tr>
							<td>strtoupper()</td>
							<td>Cadena en Mayúscula</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strtoupper($string2); ?></td>
						</tr>
						<tr>
							<td>ucwords()</td>
							<td>Primera letra en Mayúscula</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo ucwords($string2); ?></td>
						</tr>
						<tr>
							<td>strrev()</td>
							<td>Invierte Cadena</td>
							<td><?php echo $string2; ?></td>
							<td><?php echo strrev($string2); ?></td>
						</tr>
						<tr>
							<td>str_replace()</td>
							<td>Reemplaza Cadena</td>
							<td><?php echo $string3; ?></td>
							<td><?php echo str_replace("Mundo", "Jeremias", $string3); ?></td>
						</tr>
						<tr>
							<td>substr()</td>
							<td>Substraer Cadena</td>
							<td><?php echo $string3; ?></td>
							<td><?php echo substr($string3, 5, 9); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>