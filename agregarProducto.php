<?php
	include "header.php";
?>
<section id="page">
		<h1>Agregar un nuevo Producto</h1>
	
		<?php 
			$ruta = 'images/productos/';
			$prdImagen = 'noDisponible.jpg';
			if( $_FILES['prdImagen']['error'] == 0 ){
				$prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
				$prdImagen = $_FILES['prdImagen']['name'];
				move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
			}

			$prdNombre = $_POST['prdNombre'];
			$prdPrecio = $_POST['prdPrecio'];
			$idMarca = $_POST['idMarca'];
			$idCategoria = $_POST['idCategoria'];
			$prdPresentacion = $_POST['prdPresentacion'];
			$prdStock = $_POST['prdStock'];

			require 'conexion.php';
			$sql = "INSERT INTO productos
						VALUES 
							(
								NULL,
								'".$prdNombre."',
								".$prdPrecio.",
								".$idMarca.",
								".$idCategoria.",
								'".$prdPresentacion."',
								".$prdStock.",
								'".$prdImagen."'
							)";

				mysqli_query($link, $sql);

				$chequeo = mysqli_affected_rows($link);

				switch ($chequeo) {
				case 1:
					echo "<div class='alert alert-success'>
								<strong>Nuevo Producto</strong>Se Agregó el producto <strong>".$prdNombre."</strong> correctamente
						 </div>";
					break;
				default:
					echo "<div class='alert alert-warning'>
  								<strong>No fue correcto el Ingreso!</strong> No se pudo registrar el nuevo producto
  						 </div>";
					break;
			}
			mysqli_close($link);
		 ?>

		<br><br><br><a href="inicio.php"><button type="button" class="btn btn-default">Volver</button></a>
		
</section>
<?php include "footer.php"; ?>