<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php 
				include 'admin_cabecera.php'; 
				include '../../controllers/libroDataController.php';
				$libro = buscarLibro($_GET['id_libro']);
			?>


			<article>
				 <h1>SUBIR IMAGEN LIBRO</h1>
				 <div class="form"> 

	                <form action="../../controllers/cargaArchivosController.php" method="post" enctype="multipart/form-data">

	                    <label>Imagen:</label>
                    	<input type="file" name="archivo"><br/>

                    	<input type="hidden" name="id_libro" value="<?php echo $_GET['id_libro'] ?>">

	                    <input type="submit" name="enviar" value="Guardar">
	                </form>
	            </div>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>