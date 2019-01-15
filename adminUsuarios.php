<?php
	include "header.php";
	require "conexion.php";
?>
<section id="page">
		<h1>Panel de administracion de Usuarios</h1>
		<?php 
			// $link = mysqli_connect("localhost","root","","catalogo");
			$sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail FROM usuarios";
			$resultado = mysqli_query($link,$sql);
			mysqli_close($link);
		 ?>
	
		<a href="inicio.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>
	 <table class="table table-bordered table-striped table-hover">

	 	<tr class="success">
	 		<th> id </th>	
	 		<th> Nombre </th>
	 		<th> Apellido </th>
	 		<th> Email </th>
	 		<th colspan="2">
	 			<a href="formAgregarUsuario.php" title="Agregar">
	 			<img src="images/add.png"> 
	 		</th>

	 	</tr>
	
		<?php 
			while( $fila = mysqli_fetch_array($resultado)){
		 ?>
				<tr>
					
					<td><?php  echo $fila[0];?></td>
					<td><?php  echo $fila[1];?></td>
					<td><?php  echo $fila[2];?></td>
					<td><?php  echo $fila[3];?></td>
					<td><img src="images/editar.png"></td>
					<td><img src="images/eliminar.png"></td>
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