<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>enviar Archivo</title>
</head>
<body>
	<?php 
		$archivo = $_FILES['archivo'];
	 ?>

	 <pre>
	 	<?php print_r($archivo); ?>
	 </pre>
</body>
</html>