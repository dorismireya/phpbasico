<?php 
include '../../controllers/compraDataController.php'; 
include 'html.php';

 ?>


<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				  <h1>LISTAR COMPRAS </h1>
				  <?php  

					  	$compras = getListaMisCompras($_SESSION['id_usuario']);
					  	echo "<table width='100%'>";
					  		echo "<tr>";
					  			echo "<th>Categoria</th>";
					  			echo "<th>Titulo</th>";
					  			echo "<th>Nombre</th>";
					  			echo "<th>Fecha Compra</th>";
					  		echo "</tr>";

					 		foreach ($compras as $compra): 
								echo "<tr>";
									echo "<td>".$compra['categoria_libro']."</td>";
									echo "<td>".$compra['titulo_libro']."</td>";
									echo "<td>".$compra['usuario']."</td>";
									echo "<td>".$compra['fecha_compra']."</td>";
								echo "</tr>";
							endforeach;
						echo "</table>";
					?>
				  
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>