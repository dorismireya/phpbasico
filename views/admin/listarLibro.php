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
					  			echo "<th></th>";
					  			echo "<th></th>";
					  			echo "<th></th>";
					  			echo "<th></th>";
					  		echo "</tr>";

					 		foreach ($libros as $libro): 
								echo "<tr>";
									echo "<td>";
										echo "<img src='../../".$libro['ruta_imagen']."' border='0' width='50px'>";
										echo $libro['titulo_libro'];
									echo "</td>";
									echo "<td>".$libro['autor_libro']."</td>";
									echo "<td>".$libro['categoria_libro']."</td>";
									echo "<td>".$libro['cantidad']."</td>";
									echo "<td>".$libro['descripcion_libro']."</td>";
									echo "<td>";
										echo "<a href='editarLibro.php?id_libro=".$libro['id_libro']."'>Editar</a>";
									echo "</td>";
									
									echo "<td>";
										echo "<a href='../../controllers/eliminarLibro.php?id_libro=".$libro['id_libro']."'>Eliminar</a>";
									echo "</td>";

									echo "<td>";
										echo "<a href='subirImagen.php?id_libro=".$libro['id_libro']."'>Imagen</a>";
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