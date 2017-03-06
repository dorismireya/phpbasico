<?php 


if (isset($_REQUEST['crear'])) {
		$titulo_libro = $_REQUEST['titulo'];
		$autor_libro = $_REQUEST['autor'];
		$descripcion_libro = $_REQUEST['descripcion'];
		$categoria_libro = $_REQUEST['categoria'];
    	$cantidad = $_REQUEST['cantidad'];
    	$ruta_imagen = $_REQUEST['ruta_imagen'];

		registrarLibro($titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen);

}elseif (isset($_REQUEST['editar'])) {
    	$titulo_libro = $_REQUEST['titulo'];
		$autor_libro = $_REQUEST['autor'];
		$descripcion_libro = $_REQUEST['descripcion'];
		$categoria_libro = $_REQUEST['categoria'];
    	$cantidad = $_REQUEST['cantidad'];
    	$ruta_imagen = $_REQUEST['ruta_imagen'];
		$id_libro = $_REQUEST['id_libro'];

		actualizarLibro($id_libro, $titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen);
}

//Crea Libro 
function registrarLibro($titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen) {

		require 'conexionDB.php';
		$conexion= Conexion();

		$query_insert = "INSERT INTO libro (titulo_libro, autor_libro, descripcion_libro, categoria_libro, cantidad, ruta_imagen)
						 VALUES('$titulo_libro', '$autor_libro', '$descripcion_libro', '$categoria_libro', '$cantidad', '$ruta_imagen')";

		mysqli_query($conexion, $query_insert) or die('Revise su consulta de insercion');
		cerrar_conexion($conexion);

	    echo "<script language='javascript'>window.location='../views/admin/listarLibro.php'</script>";
}

function actualizarLibro($id_libro, $titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen) {
		require 'conexionDB.php';
		$conexion= Conexion();

		$query_update = "UPDATE libro
						 SET titulo_libro = '$titulo_libro', autor_libro = '$autor_libro', descripcion_libro = '$descripcion_libro',
						     categoria_libro = '$categoria_libro', cantidad = '$cantidad', ruta_imagen = '$ruta_imagen'
        				 WHERE id_libro=$id_libro";

		mysqli_query($conexion, $query_update) or die('Revise su consulta de actualizacion');
		cerrar_conexion($conexion);

		echo "<script language='javascript'>window.location='../views/admin/listarLibro.php'</script>";
	}


?>