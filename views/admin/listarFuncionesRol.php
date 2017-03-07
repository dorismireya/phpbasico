<?php 
include '../../controllers/rolController.php'; 
include 'html.php';

 ?>


<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				  
				  <?php  
				  		echo "<h1>LISTAR FUNCIONES ROL ".$_GET['nombre_tipo_usuario']."</h1>";

					  	$funciones = getListarFuncionRol($_GET['id_tipo_usuario']);
					  	echo "<table width='100%'>";
					  		echo "<tr>";
					  			echo "<th>Area</th>";
					  			echo "<th>Funcion</th>";
					  			echo "<th></th>";
					  		echo "</tr>";

					 		foreach ($funciones as $funcion): 
								echo "<tr>";
									echo "<td>".$funcion['area']."</td>";
									echo "<td>".$funcion['nombre_funcion']."</td>";
									
									echo "<td>";
										if($funcion['cantidad'] == '0')
											echo "<a href='../../controllers/activarFuncionRol.php?id_funcion=".$funcion['id_funcion']."&id_tipo_usuario=".$_GET['id_tipo_usuario']."'>Activar</a>";

										else echo "<a href='../../controllers/desactivarFuncionRol.php?id_funcion=".$funcion['id_funcion']."&id_tipo_usuario=".$_GET['id_tipo_usuario']."'>Desactivar</a>"; 
									echo "</td>";
									
								echo "</tr>";
							endforeach;
						echo "</table>";
					?>
				  
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>