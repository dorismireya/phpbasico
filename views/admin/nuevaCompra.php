<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php 
				include 'admin_cabecera.php'; 
				include '../../controllers/libroDataController.php';
				$libro = buscarLibro($_GET['id_libro']);
			?>

			<article>
				 <h1>COMPRAR LIBRO </h1>
				 <div class="form"> 

	                <form action="../../controllers/compraController.php" method="post">
	                    <?php 
	                    	echo "<label>";
	                    		echo "LIBRO: ".$libro['titulo_libro']."<br>";
	                    		echo "AUTOR: ".$libro['autor_libro']."<br>";
	                    		echo "CATEGORIA: ".$libro['categoria_libro']."<br>";
	                    		echo "DESCRIPCION: ".$libro['descripcion_libro']."<br>";
	                    		echo "CANTIDAD:<STRONG> ".$libro['cantidad']."</STRONG><br>";
	                    	echo "</label>";
	                    	echo "<BR>";
	                    ?>
	                    <label>Cantidad:</label>
	                    <input type="text" name="cantidad" required><br/>

	                    <input type="hidden" name="id_libro" value="<?php echo $_GET['id_libro'] ?>">

	                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']?>">

	                    <input type="submit" name="crear" value="Guardar">
	                </form>
	            </div>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>
