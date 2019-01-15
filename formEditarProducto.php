<?php
	include "header.php";
	require "conexion.php";

	$sqlMarcas = "SELECT idMarca, mkNombre FROM marcas";
	$resultadoMarcas = mysqli_query($link,$sqlMarcas) or die(mysqli_error($link));

	$sqlCategorias = "SELECT idCategoria, catNombre FROM categorias";
	$resultadoCategorias = mysqli_query($link,$sqlCategorias) or die(mysqli_error($link));

	
	$idProducto = $_GET['idProducto'];
	$sqlProductos = "SELECT prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion,prdStock,prdImagen FROM productos WHERE idProducto = ".$idProducto;
	$resultadoProductos = mysqli_query($link,$sqlProductos) or die (mysqli_error($link));

	$filaProducto = mysqli_fetch_assoc($resultadoProductos);

	mysqli_close($link);

?>
<section id="page">
	<h1>Formulario de Modificación de Producto</h1>

	 <form action="editarProducto.php" method="post" enctype="multipart/form-data">
	 	Nombre:
	 	<br>
		 <input type="text" class="form-control" name="prdNombre" value="<?php echo $filaProducto['prdNombre']; ?>">
		 <br>

	 	Precio:
	 	<br>
	 	<div class="input-group">
	 	 <span class="input-group-addon">$</span>
		 <input type="text" class="form-control" name="prdPrecio" value="<?php echo $filaProducto['prdPrecio']; ?>">
		</div> 
		 <br>

	 	Marca:
	 	<br>
		 	<select name="idMarca" class="btn btn-default dropdown-toggle" required>
		 		<?php 
		 			while( $filaMarca = mysqli_fetch_assoc($resultadoMarcas)){
		 		 ?>
	 					<option <?php if( $filaMarca['idMarca'] == $filaProducto['idMarca'] ){ echo 'selected'; } ?> value="<?php echo $filaMarca['idMarca']; ?>"><?php echo $filaMarca['mkNombre']; ?></option>
	 			<?php
	 					}
				 ?>
			</select>
		 <br>

	 	Categoría:
	 	<br>
	 		<select name="idCategoria" class="btn btn-default dropdown-toggle" required>
	 			<option value="">Seleccione una Categoría</option>
                <?php 
		 			while( $filaCategoria = mysqli_fetch_assoc($resultadoCategorias)){
		 		 ?>
	 					<option <?php if( $filaProducto['idCategoria'] == $filaCategoria['idCategoria'] ){ echo 'selected'; } ?> value="<?php echo $filaCategoria['idCategoria']; ?>"><?php echo $filaCategoria['catNombre']; ?></option>
	 			<?php
	 				}
				 ?>
	 		</select>
		 <br>

	 	Presentación:
	 	<br>
		 <input type="text" class="form-control" name="prdPresentacion" value="<?php echo $filaProducto['prdPresentacion']; ?>">
		 <br>

	 	Stock:
	 	<br>
		 <input type="text" class="form-control" name="prdStock" value="<?php echo $filaProducto['prdStock']; ?>">
		 <br>
	
	 	Imagen:
	 	<br>
	 		<img src="images/productos/<?php echo $filaProducto['prdImagen']; ?>">
		 	<input type="file" class="form-control" name="prdImagen">
		<br>

		<button type="submit" class="btn btn-warning">Editar Producto</button>

		<input type="hidden" name="idProducto" value="<?php echo $idProducto; ?>">
		<input type="hidden" name="prdImagenOriginal" value="<?php echo $filaProducto['prdImagen']; ?>">
	</form>
	
	<br><br>
	<a href="adminProductos.php">
			<button type="button" class="btn btn-default">Volver</button>
	</a>
	

		
</section>
<?php include "footer.php"; ?>