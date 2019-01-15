<?php 
	const SERVER = 'localhost';
	const USUARIO = 'root';
	const CLAVE = '';
	const BASE = 'catalogo';

	$link = mysqli_connect( SERVER, USUARIO, CLAVE, BASE );

		//mysqli_set-charset($link, 'utf8');
?>