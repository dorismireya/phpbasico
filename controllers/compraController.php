<?php 


if (isset($_REQUEST['crear'])) {
		
    	$cantidad = $_REQUEST['cantidad'];
    	$id_libro = $_REQUEST['id_libro'];
    	$id_usuario = $_REQUEST['id_usuario'];

		modificarCantidad($id_usuario, $id_libro, $cantidad);

}

function modificarCantidad($id_usuario, $id_libro, $cantidad) {

		require 'conexionDB.php';
		$conexion= Conexion();

		$query_update = "UPDATE libro
						 SET cantidad = (cantidad - ".$cantidad.") WHERE id_libro=$id_libro";

		mysqli_query($conexion, $query_update) or die('Revise su consulta de actualizacion');
		cerrar_conexion($conexion);

	    registrarCompra($id_usuario, $id_libro, $cantidad);
}

function registrarCompra($id_usuario, $id_libro, $cantidad) {

		//require 'conexionDB.php';
		$conexion= Conexion();

		$query_insert = "INSERT INTO compra (id_usuario, id_libro, fecha_compra, cantidad)
						 VALUES('$id_usuario', '$id_libro', NOW(),'$cantidad')";

		mysqli_query($conexion, $query_insert) or die('Revise su consulta de insercion');
		cerrar_conexion($conexion);

	    echo "<script language='javascript'>window.location='../views/admin/listarCompra.php'</script>";
}
