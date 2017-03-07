<?php
	require 'conexionDB.php';

	$id_funcion = $_GET['id_funcion'];
	$id_tipo_usuario = $_GET['id_tipo_usuario'];

	$conexion= Conexion();

	$query_delete = "DELETE FROM funcion_usuario WHERE id_funcion=$id_funcion AND id_tipo_usuario=$id_tipo_usuario";

	mysqli_query($conexion, $query_delete) or die('Revise su consulta de eliminacion');
	cerrar_conexion($conexion);

	echo "<script language='javascript'>alert('Se desactivo la funcion exitosamente')</script>";
	echo "<script language='javascript'>window.location='../views/admin/listarRol.php'</script>";
?>
