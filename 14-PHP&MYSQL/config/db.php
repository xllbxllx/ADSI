<?php
	// Configuración Base de Datos
	$host = "localhost";
	$user = "root";
	$pass = "admin";
	$ndb  = "adsi1804230";
	// Conexión Base de Datos
	$con = mysqli_connect($host, $user, $pass, $ndb);
	if (mysqli_connect_errno()) {
		echo "<span class='alert alert-danger'> 
			  	<strong>Error: </strong>"
				.mysqli_connect_error().
			  "</span>";
	}