<?php
	include "header.php";
?>
<section id="page">
		<h1>Formulario de alta de un nuevo Usuario</h1>
		<form action="agregarUsuario.php" method="post">
			Usuario Nuevo: <br>
			<input type="text" name = "usuNombre" placeholder="Nombre" class="form-control" required><br>
			<input type="text" name = "usuApellido" placeholder="Apellido" class="form-control" required><br>
			<input type="text" name = "usuEmail" placeholder="Email" class="form-control" required><br>
			<input type="password" name = "usuPass" placeholder="Clave" class="form-control" required><br>
			<input type="submit" value="Agregar Usuario" class = "btn btn-success"><br><br>
		</form>
		<a href="inicio.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>

</section>
<?php include "footer.php"; ?>