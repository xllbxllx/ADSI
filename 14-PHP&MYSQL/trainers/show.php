<?php 
	include '../config/app.php'; 
	include '../config/db.php'; 
?>
	<?php include '../includes/header.php'; ?>
	<div class="col-md-6 offset-md-3">
		<h1 class="text-center text-muted"> 
			<i class="fa fa-search fa-2x"></i>
			CONSULTAR ENTRENADOR 
		</h1>
		<hr>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item">
		    	<a href="<?php echo $url; ?>">
		    		<i class="fa fa-home"></i>
		    		Inicio
		    	</a>
		    </li>
		    <li class="breadcrumb-item">
		    	<a href="<?php echo $url; ?>trainers/">
		    		<i class="fa fa-users"></i>
		    		Módulo Entrenadores
		    	</a>
		    </li>
		    <li class="breadcrumb-item active" aria-current="page">
		    	Consultar Entrenador
		    </li>
		  </ol>
		</nav>
		<hr>
		<table class="table table-hover table-bordered table-striped">
			<?php 
				if (isset($_GET['id'])) {
					$id     = $_GET['id'];
					$sql    = "SELECT g.name AS name_gym, t.*
					   		   FROM gyms AS g, trainers AS t
					   		   WHERE g.id = t.gym_id
					   		   AND t.id = $id 
					   		   ORDER BY t.id ASC";
					$result = mysqli_query($con, $sql);
					while($row = mysqli_fetch_array($result)) {
			?>
			<tr>
				<th>Id:</th>
				<td><?php echo $row['id']; ?></td>
			</tr>
			<tr>
				<th>Nombre:</th>
				<td><?php echo $row['name']; ?></td>
			</tr>
			<tr>
				<th>Nivel:</th>
				<td><?php echo $row['level']; ?></td>
			</tr>
			<tr>
				<th>Gimnasio:</th>
				<td><?php echo $row['name_gym']; ?></td>
			</tr>
			<?php 
				} 
			}
			?>
		</table>
	</div>
	<?php include '../includes/footer.php'; ?>
