<?php

//Muestra el rol del usuario
function getListaRol(){

	$conexion= Conexion();
	$query_select = "SELECT id_tipo_usuario, nombre_tipo_usuario FROM tipo_usuario ORDER BY nombre_tipo_usuario ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}

	return $lista;
}
?>