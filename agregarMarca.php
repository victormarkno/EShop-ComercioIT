<?php
	include "header.php";
?>
<section id="page">
		<h1>Agregar una nueva marca</h1>
	
		<?php 
			$mkNombre = $_POST['mkNombre'];
			require "conexion.php";
			$sql = "INSERT INTO marcas(mkNombre) VALUES ('".$mkNombre."')";
			mysqli_query($link,$sql);
			$chequeo = mysqli_affected_rows($link); // 1 si / 0 no / (-1 ) error
			switch ($chequeo) {
				case 1:
					echo "<div class='alert alert-success'>
								<strong>Ingreso Exitoso</strong> La Marca <strong>".$mkNombre."</strong> Fue registrada correctamente
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
		<br><br><br><a href="inicio.php"><button type="button" class="btn btn-default">Volver</button></a>
		
</section>
<?php include "footer.php"; ?>