<?php 

function Conexion(){

	$server   = 'localhost';
	$username = 'root';
	$pass     = '';
	$db       = 'libreriaphp';

	//$conexion = mysqli_connect($server, $username, $pass, $db) or die('Error: no se pudo conectar con MySQL: ' . mysqli_connect_error());

	$conexion= new mysqli($server, $username, $pass, $db);

	if($conexion->connect_error){

		die("Connection fallida: ". $conexion->connect_error);
		exit();
	}

	return $conexion;
}

function cerrar_conexion($conexion){
	$conexion->close();
}

?>