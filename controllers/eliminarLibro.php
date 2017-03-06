<?php
	require 'conexionDB.php';

	$id_libro = $_GET['id_libro'];

	$conexion= Conexion();

	$query_delete = "DELETE FROM libro WHERE id_libro=$id_libro";

	mysqli_query($conexion, $query_delete) or die('Revise su consulta de eliminacion');
	cerrar_conexion($conexion);

	echo "<script language='javascript'>alert('Se elimino el registro exitosamente')</script>";
	echo "<script language='javascript'>window.location='../views/admin/listarLibro.php'</script>";
?>
