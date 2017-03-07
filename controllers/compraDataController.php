<?php 


//Listar Compras
function getListaCompra(){
	$conexion= Conexion();
	$query_select = "SELECT l.id_libro AS id_libro, l.categoria_libro AS categoria_libro, l.titulo_libro AS titulo_libro, u.id_usuario AS id_usuario, CONCAT(u.nombres, ' ', u.apellidos) AS usuario, c.id_compra AS id_compra, c.fecha_compra AS fecha_compra FROM libro l, usuario u, compra c ORDER BY c.fecha_compra ASC, l.categoria_libro ASC";

	$res_query_select = mysqli_query($conexion, $query_select)or die('Revise su consulta SELECT');
	cerrar_conexion($conexion);
	

	for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
	    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
	}

	return $lista;
}
?>