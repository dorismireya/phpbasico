<?php 
	require 'conexionDB.php';

	$cuenta = $_REQUEST['cuenta'];
	$contrasenia = $_REQUEST['contrasenia'];

	if(isset($cuenta) && isset($contrasenia)) {
		$query = "SELECT * FROM usuario
				  WHERE cuenta='$cuenta' AND contrasenia='$contrasenia'";

		$respuesta_q = mysqli_query($conexion, $query);

		$nfilas = mysqli_num_rows($respuesta_q);

		$usuario = mysqli_fetch_array($respuesta_q, MYSQLI_ASSOC);


		if($nfilas == 1){
			$_SESSION['login_usr'] = $usuario['nombres'];
			
		}

		if(isset($_SESSION['login_usr'])){
			session_start();
			$_SESSION['login_apellidos'] = $usuario['apellidos'];
			$_SESSION['id_usuario'] = $usuario['id_usuario'];
			header('location:../views/admin/sistema.php');
		}
		else header('location:../views/login.php?error_usuario=si');
	} 

?>