<?php
	include "header.php";
	require "conexion.php";

	$sqlMarcas = "SELECT idMarca, mkNombre FROM marcas";
	$resultadoMarcas = mysqli_query($link,$sqlMarcas) or die(mysqli_error($link));

	$sqlCategorias = "SELECT idCategoria, catNombre FROM categorias";
	$resultadoCategorias = mysqli_query($link,$sqlCategorias) or die(mysqli_error($link));

	mysqli_close($link);

?>
<section id="page">
	<h1>Formulario de alta de un nuevo Producto</h1>

	 <form action="agregarProducto.php" method="post" enctype="multipart/form-data">
	 	Nombre:
	 	<br>
		 <input type="text" class="form-control" name="prdNombre" placeholder="Nombre Producto">
		 <br>

	 	Precio:
	 	<br>
	 	<div class="input-group">
	 	 <span class="input-group-addon">$</span>
		 <input type="text" class="form-control" name="prdPrecio" placeholder="Precio">
		</div> 
		 <br>

	 	Marca:
	 	<br>
		 	<select name="idMarca" class="btn btn-default dropdown-toggle" required>
		 		"<option value=''>Seleccione una Marca</option>"
		 		<?php 
		 			while( $filaMarca = mysqli_fetch_assoc($resultadoMarcas)){
		 		 ?>
	 					<option value="<?php echo $filaMarca['idMarca']; ?>"><?php echo $filaMarca['mkNombre']; ?></option>";
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
	 					<option value="<?php echo $filaCategoria['idCategoria']; ?>"><?php echo $filaCategoria['catNombre']; ?></option>";
	 			<?php
	 				}
				 ?>
	 		</select>
		 <br>

	 	Presentación:
	 	<br>
		 <input type="text" class="form-control" name="prdPresentacion" placeholder="datos Presentación">
		 <br>

	 	Stock:
	 	<br>
		 <input type="text" class="form-control" name="prdStock" placeholder="datos Stock">
		 <br>

	 	Imagen:
	 	<br>
		 <input type="file" class="form-control" name="prdImagen">

		 <br>

		 <button type="submit" class="btn btn-success">Agregar Producto</button>
	 </form>
	

		
</section>
<?php include "footer.php"; ?>