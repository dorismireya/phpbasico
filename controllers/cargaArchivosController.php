<?php

	

	if(!empty($_FILES['archivo']['name'])) {
		$ruta_archivos = '../public/uploads/';
		$ruta_archivos_SQL= 'public/uploads/';

		$id_libro = $_REQUEST['id_libro'];

		$nombre = $_FILES['archivo']['name'];
		$nombre_tmp = $_FILES['archivo']['tmp_name'];
		$tipo = $_FILES['archivo']['type'];
		$tamano = $_FILES['archivo']['size'] / 1024; //tamaño en KB

		$ext_permitidas = ['jpg','jpeg','png'];
		$partes_nombre = explode('.', $nombre);
		$extension = end($partes_nombre);
		$ext_correcta = in_array($extension, $ext_permitidas);

		$tipo_correcto = preg_match('/^image\/(pjpeg|jpeg|jpg|png)$/', $tipo);

		$limite = 1.5 * 1024; //1536 KB

		if($ext_correcta && $tipo_correcto && ($tamano <= $limite)) {
			if($_FILES['archivo']['error'] > 0) {
			  echo 'Error: ' . $_FILES['archivo']['error'] . '<br/>';
			} else {
			  //echo 'Nombre: ' . $nombre . '<br/>';
			  //echo 'Tipo: ' . $tipo . '<br/>';
			  //echo 'Tamaño: ' . ($tamano) . ' KB<br/>';
			  //echo 'Guardado en: ' . $nombre_tmp;

				if(file_exists( $ruta_archivos . $nombre)) {
					echo '<br/>El archivo ya existe: ' . $nombre;
				} else {
					move_uploaded_file($nombre_tmp, $ruta_archivos . $nombre);
					//echo '<br/>Guardado en:' . $ruta_archivos . $nombre;

					require 'conexionDB.php';
					$conexion= Conexion();

					$query_update = "UPDATE libro
						 SET ruta_imagen = '".$ruta_archivos_SQL . $nombre."' WHERE id_libro='$id_libro'";

					mysqli_query($conexion, $query_update) or die('Revise su consulta de actualizacion');
					cerrar_conexion($conexion);

					echo "<script language='javascript'>alert('Se subio la imagen exitosamente')</script>";
					echo "<script language='javascript'>window.location='../views/admin/listarLibro.php'</script>";
				}
			}

		} else {
			echo 'ERROR, tienes que seleccionar un archivo con extenciones permitidas(jpg, jpeg, png)<br/>';
			echo '<a href="../views/formularioSubida.php">volver a intentar</a>';
			//$error_tipo_archivo = 'Archivo inválido';
			//header('location:../views/formularioSubida.php');
		}

	} else {
		echo 'ERROR, tienes que seleccionar algun archivo.<br/>';
		echo '<a href="../views/formularioSubida.php">volver a intentar</a>';
	}
?>