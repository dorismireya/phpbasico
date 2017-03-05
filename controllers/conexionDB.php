<?php 
	$server   = 'localhost';
	$username = 'root';
	$pass     = '';
	$db       = 'libreriaphp';

	$conexion = mysqli_connect($server, $username, $pass, $db) or die('Error: no se pudo conectar con MySQL: ' . mysqli_connect_error());

?>