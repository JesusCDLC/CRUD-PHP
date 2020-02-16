<?php
if (!$_SESSION["ingreso"]) {
	header("location:index.php?ruta=ingreso");
	exit();
}
?>
<br>
	<h1>INGRESAR</h1>

	<form method="post" action="">
		
		<input type="text" placeholder="Usuario" name="usuarioi" required>

		<input type="password" placeholder="Contraseña" name="clavei" required>

		<input type="submit" value="Ingresar">

	</form>

	<?php
		$ingreso = new AdminC();
		$ingreso->IngresoC();
	?>