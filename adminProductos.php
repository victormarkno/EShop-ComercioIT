<?php
	include "header.php";
	require "conexion.php";
?>
<section id="page">
		<h1>Panel de administracion de Productos</h1>
		<?php 
			// $link = mysqli_connect("localhost","root","","catalogo");
			$sql = "SELECT idProducto, prdNombre, prdPrecio, mkNombre ,catNombre,prdPresentacion,prdStock,prdImagen FROM productos,marcas,categorias WHERE marcas.idMarca = productos.idMarca AND categorias.idCategoria = productos.idCategoria";
			$resultado = mysqli_query($link,$sql)  or die(mysqli_error($link));
			mysqli_close($link);
		 ?>
	
		<a href="inicio.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>
	 <table class="table table-bordered table-striped table-hover">

	 	<tr class="success">
	 		<th> Nombre </th>	
	 		<th> Precio </th>
	 		<th> Marca </th>
	 		<th> Categoria </th>
	 		<th> Presentacion</th>
	 		<th> Stock </th>
	 		<th> Imagen </th>
	 		<th colspan="2">
	 			<a href="formAgregarProducto.php" title="Agregar">
	 			<img src="images/add.png"> 
	 		</th>

	 	</tr>
	
		<?php 
			while( $fila = mysqli_fetch_assoc($resultado)){
		 ?>
				<tr>
					
					<td><?php  echo $fila['prdNombre'];?></td>
					<td><?php  echo $fila['prdPrecio'];?></td>	
					<td><?php  echo $fila['mkNombre'];?></td>
					<td><?php  echo $fila['catNombre'];?></td>
					<td><?php  echo $fila['prdPresentacion'];?></td>
					<td><?php  echo $fila['prdStock'];?></td>
					<td><img src="images/productos/<?php  echo $fila['prdImagen'],'"';?>" width ="100px"></td>
					<td>
						<a href="formEditarProducto.php?idProducto=<?php echo $fila['idProducto']; ?>" title="Editar">
						<img src="images/editar.png">
					</td>
					<td>
						<a href="formBorrarProducto.php?idProducto=<?php echo $fila['idProducto']; ?>" title="Eliminar">
						<img src="images/eliminar.png">
					</td>
				</tr>
		<?php
			}
		?>

		</table>
		<a href="inicio.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>
</section>
<?php include "footer.php"; ?>