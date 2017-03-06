<?php 
include '../../controllers/libroDataController.php'; 
include 'html.php';

 ?>


<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				  <h1>LISTAR LIBROS </h1>
				  <?php  

					  	$libros = getListaLibro();
					  	echo "<table width='100%'>";
					  		echo "<tr>";
					  			echo "<th>Titulo</th>";
					  			echo "<th>Autor</th>";
					  			echo "<th>Categoria</th>";
					  			echo "<th>Cantidad</th>";
					  			echo "<th>Descripcion</th>";
					  			//echo "<th>Imagen</th>";
					  			echo "<th></th>";
					  			echo "<th></th>";
					  		echo "</tr>";

					 		foreach ($libros as $libro): 
								echo "<tr>";
									echo "<td>".$libro['titulo_libro']."</td>";
									echo "<td>".$libro['autor_libro']."</td>";
									echo "<td>".$libro['categoria_libro']."</td>";
									echo "<td>".$libro['cantidad']."</td>";
									echo "<td>".$libro['descripcion_libro']."</td>";
									echo "<td>".$libro['ruta_imagen']."</td>";
									echo "<td>";
										//echo "<a href='usuarioEditar.php?id_usuario=".$usuario['id_usuario']."'>Editar</a>";
									echo "</td>";
									echo "<td>";
										echo "<a href='#'>Eliminar</a>";
									echo "</td>";
								echo "</tr>";
							endforeach;
						echo "</table>";
						echo "<a href='#'>Nuevo Usuario</a>";
					?>
				  
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>