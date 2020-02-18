<?php

session_start();
if (!$_SESSION["ingreso"]) {
	header("location:index.php?ruta=ingreso");

	exit();
}
?>
	
	<br>
	<h1>Empleados</h1>

	<table id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Puesto</th>
				<th>Salario</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			

			<?php 
			$mostar = new EmpleadorC();
			$mostar->MostrarEmpleadosC();
			?>

		</tbody>

	</table>

	<?php 

	$eliminar = new EmpleadorC();
	$eliminar->BorrarEmpleadoC();

	
	?>
