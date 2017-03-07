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

function getListarFuncionRol($id_tipo_usuario){

	$conexion= Conexion();
	$query_select = "SELECT f.id_funcion AS id_funcion, f.nombre_funcion AS nombre_funcion, f.area AS area, COUNT(fu.id_funcion) AS cantidad FROM funcion f LEFT JOIN funcion_usuario fu ON f.id_funcion = fu.id_funcion AND fu.id_tipo_usuario = '".$id_tipo_usuario."' GROUP BY f.id_funcion ORDER BY f.area ASC, f.nombre_funcion ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}

	return $lista;
}
?>