<?php 
include 'controllers/libroPrincipalController.php'; 

 ?>



			

			<article>
				  <h1>LISTAR LIBROS </h1>
				  <?php  

					  	$libros = getListaLibro();
					  	echo "<table width='100%'>";
					  		echo "<tr>";
					  			echo "<th>Portada</th>";
					  			echo "<th>Titulo</th>";
					  			echo "<th>Autor</th>";
					  			echo "<th>Categoria</th>";
					  			echo "<th>Cantidad</th>";
					  			echo "<th>Descripcion</th>";
					  		echo "</tr>";

					 		foreach ($libros as $libro): 
								echo "<tr>";
									echo "<td>";
										echo "<img src='".$libro['ruta_imagen']."' border='0' width='50px'>";
										//echo $libro['titulo_libro'];
									echo "</td>";
									echo "<td>".$libro['titulo_libro']."</td>";
									echo "<td>".$libro['autor_libro']."</td>";
									echo "<td>".$libro['categoria_libro']."</td>";
									echo "<td>".$libro['cantidad']."</td>";
									echo "<td>".$libro['descripcion_libro']."</td>";
								echo "</tr>";
							endforeach;
						echo "</table>";
					?>
				  
			</article>
			