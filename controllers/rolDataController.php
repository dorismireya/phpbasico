<?php 


if (isset($_REQUEST['crear'])) {
		
    	$rol = $_REQUEST['rol'];

		registrarRol($rol);

}


function registrarRol($rol) {

		require 'conexionDB.php';
		$conexion= Conexion();

		$query_insert = "INSERT INTO tipo_usuario (nombre_tipo_usuario)
						 VALUES('$rol')";

		mysqli_query($conexion, $query_insert) or die('Revise su consulta de insercion');
		cerrar_conexion($conexion);

	    echo "<script language='javascript'>window.location='../views/admin/listarRol.php'</script>";
}
