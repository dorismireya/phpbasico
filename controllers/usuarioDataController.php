<?php

	if (isset($_REQUEST['crear'])) {
		$nombre = $_REQUEST['nombre'];
		$apellido = $_REQUEST['apellido'];
		$usuario = $_REQUEST['cuenta'];
		$password = $_REQUEST['password'];
		$id_tipo_usuario = $_REQUEST['rol'];

		registrarUsuario($nombre, $apellido, $usuario, $password, $id_tipo_usuario);

	}elseif (isset($_REQUEST['editar'])) {

		$nombre = $_REQUEST['nombre'];
		$apellido = $_REQUEST['apellido'];
		$usuario = $_REQUEST['cuenta'];
		$password = $_REQUEST['password'];
		$id_tipo_usuario = $_REQUEST['rol'];	
		$id_usuario = $_REQUEST['id_usuario'];

		actualizarUsuario($id_usuario, $nombre, $apellido, $usuario, $password, $id_tipo_usuario);

	}elseif (isset($_REQUEST['editarUsuario'])) {

		$nombre = $_REQUEST['nombre'];
		$apellido = $_REQUEST['apellido'];
		$usuario = $_REQUEST['cuenta'];
		$password = $_REQUEST['password'];
		$id_tipo_usuario = $_REQUEST['rol'];	
		$id_usuario = $_REQUEST['id_usuario'];

		actualizarUsuarioFuncion($id_usuario, $nombre, $apellido, $usuario, $password, $id_tipo_usuario);
	}

//Crea Usuario
function registrarUsuario($nombre, $apellido, $usuario, $password, $id_tipo_usuario) {

		require 'conexionDB.php';
		$conexion= Conexion();

		$query_insert = "INSERT INTO usuario (id_tipo_usuario, nombres, apellidos, cuenta, contrasenia)
						 VALUES('$id_tipo_usuario', '$nombre', '$apellido', '$usuario', '$password')";

		mysqli_query($conexion, $query_insert) or die('Revise su consulta de insercion');
		cerrar_conexion($conexion);

	    echo "<script language='javascript'>window.location='../views/admin/listarUsuario.php'</script>";
}

function actualizarUsuario($id_usuario, $nombre, $apellido, $usuario, $password, $id_tipo_usuario) {
		require 'conexionDB.php';
		$conexion= Conexion();

		$query_update = "UPDATE usuario
						 SET id_tipo_usuario = '$id_tipo_usuario', nombres = '$nombre', apellidos = '$apellido',
						     cuenta = '$usuario', contrasenia = '$password'
        				 WHERE id_usuario=$id_usuario";

		mysqli_query($conexion, $query_update) or die('Revise su consulta de actualizacion');
		cerrar_conexion($conexion);

		echo "<script language='javascript'>window.location='../views/admin/listarUsuario.php'</script>";
	}

	function actualizarUsuarioFuncion($id_usuario, $nombre, $apellido, $usuario, $password, $id_tipo_usuario) {
		require 'conexionDB.php';
		$conexion= Conexion();

		$query_update = "UPDATE usuario
						 SET id_tipo_usuario = '$id_tipo_usuario', nombres = '$nombre', apellidos = '$apellido',
						     cuenta = '$usuario', contrasenia = '$password'
        				 WHERE id_usuario=$id_usuario";

		mysqli_query($conexion, $query_update) or die('Revise su consulta de actualizacion');
		cerrar_conexion($conexion);

		echo "<script language='javascript'>window.location='../views/admin/sistema.php'</script>";
	}


?>