<?php
	include "header.php";
?>
<section id="page">
		<h1>Login de Usuario</h1>
		<form action="login.php" method="post">
		<br>
			Usuario: <input type="text" name = "usuEmail" placeholder="Email" class="form-control" required><br>
			<input type="password" name = "usuPass" placeholder="Clave" class="form-control" required><br>
			<input type="submit" value="Ingresar" class = "btn btn-success"><br><br>
		</form>
		<a href="inicio.php">
			<button type="button" class="btn btn-warning">Volver</button>
		</a>

		<?php 
		if (isset($_GET['error'])){
			$error = $_GET['error'];
			if ($error == 1) {
		?>
				<div class="alert alert-danger" role="alert">
  				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
 		 		<span class="sr-only">Error:</span>
  					usuario y/o clave incorrectos
  				</div>
  		<?php 
			}	
		}
		 ?>


</section>
<?php include "footer.php"; ?>