<?php 
	//rutina para subir imagen si fue enviada
	$ruta = 'images/productos/';
	$prdImagen = 'noDispoible.jpg';
	if( $_FILES['prdImagen']['error'] == 0 ){
		$prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
		$prdImagen = $_FILES['prdImagen']['name'];
		move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
	}

	//rutina para insertar datos en table productos
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
					)"

		mysqli_query($link, $sql)
						or die(mysqli_error($link));

		$chequeo = mysqli_affected_rows($link);

		mysqli_close($link);
?>

<section id="page">
<?php 
		if($chequeo == 1){
?>
			contenedor de bootstrap mostrando un mensaje que el alta fue correcta
<?php
	}
?>
</section>