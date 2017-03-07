<?php 

//Lista los libros por categoria y titulo de libro
function getListaLibro(){
	$conexion= Conexion();
	$query_select = "SELECT id_libro, titulo_libro, autor_libro, descripcion_libro, categoria_libro, cantidad, ruta_imagen FROM libro ORDER BY categoria_libro ASC, titulo_libro ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}

	return $lista;
}

//Busca la informacion del libro
function buscarLibro($id_libro) {
		$conexion= Conexion();
		$query = "SELECT * FROM libro WHERE id_libro=$id_libro";

		$res_query = mysqli_query($conexion, $query) or die('Revise su consulta de busqueda');
		cerrar_conexion($conexion);

		return mysqli_fetch_array($res_query, MYSQLI_ASSOC);
}

//Muestra todos los libros disponibles para la compra
function getListaLibroDisponible(){
	$conexion= Conexion();
	$query_select = "SELECT id_libro, titulo_libro, autor_libro, descripcion_libro, categoria_libro, cantidad, ruta_imagen FROM libro WHERE cantidad > '0' ORDER BY categoria_libro ASC, titulo_libro ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}

	return $lista;
}

?>