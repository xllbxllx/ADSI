<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-2">
        <h1><i class="fa fa-search"></i>Consultar de Usuarios</h1>
        <hr>
        <a href="{{ url('users') }}">
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Usuarios
				</a>
        <br>
        <br>
        <table class="table table-striped">
					<tr>
						<th>Nombre Completo:</th>
						<td>{{ $user->fullname }}</td>
					</tr>
					<tr>
						<th>Correo Electrónico:</th>
						<td>{{ $user->email }}</td>
					</tr>
					<tr>
						<th>Teléfono:</th>
						<td>{{ $user->phone }}</td>
					</tr>
					<tr>
						<th>Fecha Nacimiento:</th>
						<td>{{ $user->birthdate }}</td>
					</tr>
					<tr>
						<th>Genero:</th>
						<td>{{ $user->gender }}</td>
					</tr>
					<tr>
						<th>Direccion:</th>
						<td>{{ $user->address }}</td>
					</tr>
				</table>
      </div>
    </div>
  </div>

</body>
</html>
