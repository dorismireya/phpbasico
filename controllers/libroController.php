<?php 


if (isset($_REQUEST['crear'])) {
		$titulo_libro = $_REQUEST['titulo'];
		$autor_libro = $_REQUEST['autor'];
		$descripcion_libro = $_REQUEST['descripcion'];
		$categoria_libro = $_REQUEST['categoria'];
    	$cantidad = $_REQUEST['cantidad'];
    	$ruta_imagen = $_REQUEST['ruta_imagen'];

		registrarLibro($titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen);
}

//Crea Libro 
function registrarLibro($titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen) {

		require 'conexionDB.php';
		$conexion= Conexion();

		$query_insert = "INSERT INTO libro (titulo_libro, autor_libro, descripcion_libro, categoria_libro, cantidad, ruta_imagen)
						 VALUES('$titulo_libro', '$autor_libro', '$descripcion_libro', '$categoria_libro', '$cantidad', '$ruta_imagen')";

		mysqli_query($conexion, $query_insert) or die('Revise su consulta de insercion');
		cerrar_conexion($conexion);

	    //echo "<script language='javascript'>window.location='../views/libros/listarLibro.php'</script>";
}


?>