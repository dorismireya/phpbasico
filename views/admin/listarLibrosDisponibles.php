<?php 
include '../../controllers/libroDataController.php'; 
include 'html.php';

 ?>


<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				  <h1>LISTAR LIBROS DISPONIBLES PARA COMPRA</h1>
				  <?php  

					  	$libros = getListaLibroDisponible();
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
					  			echo "<th></th>";
					  		echo "</tr>";

					 		foreach ($libros as $libro): 
								echo "<tr>";
									echo "<td>".$libro['titulo_libro']."</td>";
									echo "<td>".$libro['autor_libro']."</td>";
									echo "<td>".$libro['categoria_libro']."</td>";
									echo "<td>".$libro['cantidad']."</td>";
									echo "<td>".$libro['descripcion_libro']."</td>";
									//echo "<td>".$libro['ruta_imagen']."</td>";
									echo "<td>";
										echo "<a href='nuevaCompra.php?id_libro=".$libro['id_libro']."'>Comprar</a>";
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