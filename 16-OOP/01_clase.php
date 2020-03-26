<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clase (Atributos/Métodos)</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 mt-5">
			<h1 class="h3 text-center">Clase (Atributos/Métodos)</h1>
			<hr>
			<?php
				// Clase
				class VideoGame {
					// Atributos (Características Propias del Objeto)
					public $name;     // Nombre del VideoJuego
					public $platform; // Plataforma - Consola
					public $price;    // Precio Venta
					public $year;     // Año de Lanzamiento

					// Métodos (Acciones-Lógica)
					public function setAttributes($name, $platform, $price, $year) {
						$this->name     = $name;
						$this->platform = $platform;
						$this->price    = $price;
						$this->year     = $year;
					}
					public function getAttributes() {
						return $this->name." - ". 
							   $this->platform." - ".
							   $this->price." - ".
							   $this->year;
					}
				}

				$vg1 = new VideoGame; // Crear el Objeto
				$vg1->setAttributes('Pokemon Espada', 'Nintento Switch', 50, 2019);
				echo "<div class='alert alert-secondary'>";
				echo $vg1->getAttributes();
				echo "</div>";

				$vg2 = new VideoGame;
				echo "<div class='alert alert-secondary'>";
				$vg2->setAttributes('Mario Oddysey', 'Nintento Switch', 40, 2017);
				echo "El nombre del Video Juego es: ".$vg2->name;
				echo "</div>";
			?>
			</div>
		</div>
	</div>
</body>
</html>
