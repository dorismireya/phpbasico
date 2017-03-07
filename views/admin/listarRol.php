<?php 
include '../../controllers/rolController.php'; 
include 'html.php';

 ?>


<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				  <h1>LISTAR ROLES </h1>
				  <?php  

					  	$roles = getListaRol();
					  	echo "<table width='100%'>";
					  		echo "<tr>";
					  			echo "<th>Rol</th>";
					  			echo "<th></th>";
					  		echo "</tr>";

					 		foreach ($roles as $rol): 
								echo "<tr>";
									echo "<td>".$rol['nombre_tipo_usuario']."</td>";
									
									echo "<td>";
										echo "<a href='editarLibro.php?id_libro=".$rol['id_tipo_usuario']."'>Ver</a>";
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