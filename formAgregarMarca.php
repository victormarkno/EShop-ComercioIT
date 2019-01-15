<?php
	include "header.php";
?>
<section id="page">
		<h1>Formulario de alta de una nueva Marca</h1>
		<form action="agregarMarca.php" method="post">
			Marca: <br>
			<input type="text" name = "mkNombre" placeholder="Marca" class="form-control" required><br>
			<input type="submit" value="Agregar Marca" class = "btn btn-success"><br><br><br>
		</form>
		<a href="inicio.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>
	
</section>
<?php include "footer.php"; ?>