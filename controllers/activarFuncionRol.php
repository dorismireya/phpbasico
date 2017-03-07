<?php
	require 'conexionDB.php';

	$id_funcion = $_GET['id_funcion'];
	$id_tipo_usuario = $_GET['id_tipo_usuario'];

	$conexion= Conexion();

	$query_insert = "INSERT INTO funcion_usuario(id_funcion, id_tipo_usuario)
						 VALUES('$id_funcion', '$id_tipo_usuario')";

		mysqli_query($conexion, $query_insert) or die('Revise su consulta de insercion');
		cerrar_conexion($conexion);

	echo "<script language='javascript'>alert('Se activo la funcion exitosamente')</script>";
	echo "<script language='javascript'>window.location='../views/admin/listarRol.php'</script>";
?>
