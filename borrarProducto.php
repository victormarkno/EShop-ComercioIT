<?php
	include "header.php";
?>
<section id="page">
		<h1>Confirmación de Baja de un Producto</h1>
  		<a href="adminProductos.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>
		<?php 
			$idProducto = $_POST['idProducto'];
			require "conexion.php";
			$sql = "DELETE FROM productos WHERE idProducto = ".$idProducto;
			if(mysqli_query($link,$sql)){
		?>	
				<div class='alert alert-danger'>
		  			<strong>Se ha eliminado correctamente el producto</strong>
		  		</div>
		 <?php 
			}else{
				echo "Error al intentar eliminar el Producto";
			}
			mysqli_close($link);
		 ?>


</section>
<?php include "footer.php"; ?>