<?php
	include "header.php";
?>
<section id="page">
		<h1>Modificación de Producto</h1>

		<?php 
			$ruta = "images/productos/";
			$prdImagen = $_POST['prdImagenOriginal'];
			if ($_FILES['prdImagen']['error']) {
				$prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
				$prdImagen = $_FILES['prdImagen']['name'];
				move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
			}

		?>

</section>
<?php include "footer.php"; ?>