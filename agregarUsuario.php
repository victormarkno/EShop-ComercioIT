<?php
	include "header.php";
?>
<section id="page">
		<h1>Agregar un nuevo usuario Nuevo Usuario</h1>
		<?php 
			$usuNombre = $_POST['usuNombre'];
			$usuApellido = $_POST['usuApellido'];
			$usuEmail = $_POST['usuEmail'];
			$usuPass = $_POST['usuPass'];

			require "conexion.php";
			$sql = "INSERT INTO usuarios (usuNombre,usuApellido,usuEmail,usuPass) VALUES ('".$usuNombre."','".$usuApellido."','".$usuEmail."','".$usuPass."')";
			mysqli_query($link,$sql);
			$chequeo = mysqli_affected_rows($link);
			switch ($chequeo) {
				case 1:
					echo "<div class='alert alert-success'>
								<strong>Nuevo Usuario</strong>El usuario <strong>".$usuNombre."</strong>Fue ingresado correctamente
						 </div>";
					break;
				default:
					echo "<div class='alert alert-warning'>
  								<strong>No fue correcto el Ingreso!</strong> No se pudo registrar la nueva Marca
  						 </div>";
					break;
			}
			mysqli_close($link);

		 ?>
	<br><br><br><button type="button" class="btn btn-default"><a href="inicio.php">Volver</a></button>

</section>
<?php include "footer.php"; ?>