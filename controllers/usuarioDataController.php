<?php

	if (isset($_REQUEST['crear'])) {
		$nombre = $_REQUEST['nombre'];
		$apellido = $_REQUEST['apellido'];
		$usuario = $_REQUEST['cuenta'];
		$password = $_REQUEST['password'];
		$id_tipo_usuario = $_REQUEST['rol'];

		registrarUsuario($nombre, $apellido, $usuario, $password, $id_tipo_usuario);

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