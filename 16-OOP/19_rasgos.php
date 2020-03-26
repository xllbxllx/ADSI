<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Rasgos/Características</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="h3 text-center">Rasgos/Características</h1>
				<hr>
				<ul class="list-group">
				<?php 
					trait Hello {
						public function sayHello($name) {
							echo "<li class='list-group-item'> Bienvenido: ".$name;
						}
					}
					trait Adsi {
						public function sayAdsi($code) {
							echo " | Programa: ".$code;
						}
					}
					class Department {
						use Hello, Adsi;
						public function sayDepartment($dep) {
							echo " | Regional: ".$dep."</li>";
						}
					}

					$hl = new Department;
					$hl->sayHello('Jeremias Springfield');
					$hl->sayAdsi(1804230);
					$hl->sayDepartment('Caldas');

				?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>	