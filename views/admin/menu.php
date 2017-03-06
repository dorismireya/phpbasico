<?php 
include '../../controllers/adminController.php'; 
include '../../controllers/libroController.php'; 

echo "<nav>";
	echo "<ul>";
		$areas = getArea($_SESSION['id_usuario']);

		foreach ($areas as $area): 
			echo "<li>";
				echo $area['area'];
				echo "<ul>";
					$funciones = getFuncion($_SESSION['id_usuario'], $area['area']);

					foreach ($funciones as $funcion):
						echo "<li>";
							echo "<a href='".$funcion['accion']."'>";
								echo $funcion['nombre_funcion'];
							echo "</a>";
						echo "</li>";
					endforeach;
				echo "</ul>";
			echo "</li>";
		endforeach;
	echo "</ul>";
echo "</nav>";
?>