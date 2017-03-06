<?php 
include '../../controllers/adminController.php'; 

echo "<nav>";
	echo "<ul>";
		$areas = getArea($_SESSION['id_usuario']);

		foreach ($areas as $area): 
			echo "<li>";
				echo "<a class='active' href='#''>".$area['area']."</a>";
			echo "</li>";
				//echo "<ul>";
					$funciones = getFuncion($_SESSION['id_usuario'], $area['area']);

					foreach ($funciones as $funcion):
						echo "<li>";
							echo "<a href='".$funcion['accion']."'>";
								echo $funcion['nombre_funcion'];
							echo "</a>";
						echo "</li>";
					endforeach;
				//echo "</ul>";
			//echo "</li>";
		endforeach;
	echo "</ul>";
echo "</nav>";
?>