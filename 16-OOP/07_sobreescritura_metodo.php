<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sobreescritura de Método</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="h3 text-center">Sobreescritura de Método</h1>
				<hr>

				<?php 
					class Vehicle {
						protected $brand;
						protected $refer;

						public function __construct($brand, $refer) {
							$this->brand = $brand;
							$this->refer = $refer;
						}

						public function getVehicle() {
							echo "<li class='list-group-item'> <strong>Referencia:</strong> ".$this->refer."</li><br>";
						}
					}
					class Auto extends Vehicle {
						public function getVehicle() {
							echo "<li class='list-group-item'> <strong>Marca:</strong> ".$this->brand."</li>";
							parent::getVehicle();
						}
					}
					$vh = new Auto('Audi', 'A5 SportBack');
					$vh->getVehicle();

					$vh = new Auto('Audi', 'A5 Coupe');
					$vh->getVehicle();

					$vh = new Auto('Audi', 'A5 Sedán');
					$vh->getVehicle();

				?>

			</div>
		</div>
	</div>
</body>
</html>	