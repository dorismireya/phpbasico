<?php
require 'conexionDB.php';


//Mostrar Informacion del usuario
function getDatosUsuario($id_usuario){
	$conexion= Conexion();
	$query_select = "SELECT tu.nombre_tipo_usuario AS nombre_tipo_usuario, CONCAT(u.nombres, ' ', u.apellidos) AS usuario FROM usuario u, tipo_usuario tu WHERE u.id_tipo_usuario = tu.id_tipo_usuario AND u.id_usuario = '".$id_usuario."'";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}



	return $lista;
}

//Muestra la lista de usuarios que tenemos en el sistema
function getListaUsuario(){
	$conexion= Conexion();
	$query_select = "SELECT u.id_usuario AS id_usuario, tu.nombre_tipo_usuario AS nombre_tipo_usuario, CONCAT(u.nombres, ' ', u.apellidos) AS usuario, u.cuenta AS cuenta FROM usuario u, tipo_usuario tu WHERE u.id_tipo_usuario = tu.id_tipo_usuario ORDER BY u.nombres ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}



	return $lista;
}
?>