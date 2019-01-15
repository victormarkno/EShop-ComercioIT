<?php 
	$usuEmail = $_POST['usuEmail'];
	$usuPass = $_POST['usuPass'];

	require "conexion.php";
	$sql = "SELECT 1 FROM usuarios WHERE usuEmail = '".$usuEmail."' AND usuPass= '".$usuPass."'";
	$resultado = mysqli_query($link,$sql) or die (mysqli_error($link));
	$cantidad = mysqli_num_rows($resultado);
	if ($cantidad == 0) {
		header('location: formLogin.php?error=1');

	}
	else{
		header('location: inicio.php');
	}

?>