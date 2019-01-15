<?php
	include "header.php";
?>
<section id="page">
		<h1>Confirmación de Baja de un Producto</h1>

		<?php 
			$idProducto = $_GET['idProducto'];

			require "conexion.php";
			$sql = "SELECT prdNombre, prdPrecio, mkNombre ,catNombre,prdPresentacion,prdStock,prdImagen FROM productos,marcas,categorias WHERE marcas.idMarca = productos.idMarca AND categorias.idCategoria = productos.idCategoria AND idProducto = ".$idProducto;

			$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
			$fila = mysqli_fetch_assoc($resultado);
			mysqli_close($link);

		 ?>

		<div class='alert alert-danger'>
  			<strong>Se eliminará el siguiente producto</strong>
  		</div>
  		<div> 
  			<form action="borrarProducto.php" method="post" onsubmit="return confirmarBaja()">
	  			<h2>Nombre: <?php echo  $fila['prdNombre']; ?></h2>

	  			<h4>Imagen: <img src="images/productos/<?php  echo $fila['prdImagen'] ;?>"></h4>
	  			<h4>Precio: <?php echo $fila['prdPrecio']; ?></h4>
	  			<h4>Marca: <?php echo $fila['mkNombre']; ?></h4>
	  			<h4>Categoria: <?php echo $fila['catNombre']; ?></h4>
	  			<h4>Presentación: <?php echo $fila['prdPresentacion']; ?></h4>
	  			<h4>Stock: <?php echo $fila['prdStock'] ?></h4>
	  			<input type="hidden" name="idProducto" value="<?php echo $idProducto; ?>">
	  			<input type="submit" value="Confirmar Baja" class="btn btn-danger">
			</form>
			<script src = "js/funciones.js"></script>
  		</div>
  		<br>
		<a href="adminProductos.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>

</section>
<?php include "footer.php"; ?>