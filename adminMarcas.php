<?php 	
		include "header.php";
		require "conexion.php";
 ?>

 <section id="page">	
 	<h1>Panel de Administración de Marcas</h1>	
 	<?php 	
 		$sql = "SELECT idMarca,mkNombre FROM marcas";
 		$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
 		mysqli_close($link);
 	 ?>
		<a href="inicio.php">
			<button type="button" class="btn btn-default">Volver</button>
		</a>
 	<table class="table table-bordered table-striped table-hover">
		<tr class="success">	
			<th> id</th>
			<th> Categoria</th>
			<th colspan="2">
				<a href="formAgregarMarca.php" title="Agregar">
				<img src="images/add.png">
			</th>

		</tr>	
		<?php 
			while( $fila = mysqli_fetch_assoc($resultado)){
		 ?>
		 	<tr>	
				<td><?php  echo $fila['idMarca'];?></td>
				<td><?php  echo $fila['mkNombre'];?></td>
				<td>
					<img src="images/editar.png">
					<a href="formEditarMarca.php" title="Modificar">
				</td>
				 <td>
                <a href="formBorrarMarca.php" title="Eliminar">
                    <img src="images/eliminar.png">
                </a>
            </td>
		 	</tr>
		 <?php
			}
		?>
 	</table>
		
<br><br><a href="inicio.php"><button type="button" class="btn btn-default">Volver</button></a>

 </section>
 <?php include "footer.php"; ?>