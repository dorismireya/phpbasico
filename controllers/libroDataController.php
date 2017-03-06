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

?>