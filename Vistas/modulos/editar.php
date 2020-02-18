<?php

session_start();
if (!$_SESSION["ingreso"]) {
	header("location:index.php?ruta=ingreso");

	exit();
}
?>	
	
	<br>
	<h1>EDITAR UN EMPLEADO</h1>

	<form method="post">
		
		<!-- <input type="text" placeholder="Nombre" name="nombreD" required>

		<input type="text" placeholder="Apellido" name="apellidoD" required>

		<input type="email" placeholder="Email" name="emailD" required>

		<input type="text" placeholder="Puesto" name="puestoD" required>

		<input type="text" placeholder="Salario" name="salarioD" required>

		<input type="submit" value="Actualizar"> -->

        <?php 

        $editar = new EmpleadorC();
        $editar->EditarEmpleadoC();

        $actualizar = new EmpleadorC();
        $actualizar->ActualizarEmpleadoC();

        
        ?>

	</form>
