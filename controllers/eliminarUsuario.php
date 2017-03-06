<?php
	require 'conexionDB.php';

	$id_usuario = $_GET['id_usuario'];

	$conexion= Conexion();

	$query_delete = "DELETE FROM usuario WHERE id_usuario=$id_usuario";

	mysqli_query($conexion, $query_delete) or die('Revise su consulta de eliminacion');
	cerrar_conexion($conexion);

	echo "<script language='javascript'>alert('Se elimino el registro exitosamente')</script>";
	echo "<script language='javascript'>window.location='../views/admin/listarUsuario.php'</script>";
?>
