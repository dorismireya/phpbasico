<?php


//Muestra las areas del sistema
function getArea($id_usuario){
	$conexion= Conexion();
	
	$query_select = "SELECT f.area AS area FROM usuario u, tipo_usuario tu, funcion_usuario fu, funcion f WHERE f.id_funcion = fu.id_funcion AND fu.id_tipo_usuario = tu.id_tipo_usuario AND f.estado = 'activo' AND u.id_tipo_usuario = tu.id_tipo_usuario AND u.id_usuario = '".$id_usuario."' GROUP BY f.area ORDER BY f.area ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);


	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}
	return $lista;
}

//Muestra las funciones del areaque correscponden al usuario
function getFuncion($id_usuario, $area){
	$conexion= Conexion();
	
	$query_select = "SELECT f.nombre_funcion AS nombre_funcion, f.accion AS accion FROM usuario u, tipo_usuario tu, funcion_usuario fu, funcion f WHERE u.id_tipo_usuario = tu.id_tipo_usuario AND tu.id_tipo_usuario = fu.id_tipo_usuario AND fu.id_funcion = f.id_funcion AND  f.estado = 'activo' AND u.id_usuario = '$id_usuario' AND f.area = '$area' ORDER BY f.nombre_funcion ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}
	return $lista;
}
?>