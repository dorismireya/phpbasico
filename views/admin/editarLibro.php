<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php 
				include 'admin_cabecera.php'; 
				include '../../controllers/libroDataController.php';
				$libro = buscarLibro($_GET['id_libro']);
			?>


			<article>
				 <h1>EDITAR LIBRO </h1>
				 <div class="form"> 

	                <form action="../../controllers/libroController.php" method="post">
	                    <label>Titulo:</label>
	                    <input type="text" name="titulo" value="<?php echo $libro['titulo_libro'] ?>" required><br/>

	                    <label>Autor:</label>
	                    <input type="text" name="autor" value="<?php echo $libro['autor_libro'] ?>" required><br/>
	                    
	                    <label>Categoria:</label>
	                    <input type="text" name="categoria" value="<?php echo $libro['categoria_libro'] ?>" required><br/>

	                    <label>Cantidad:</label>
	                    <input type="text" name="cantidad" value="<?php echo $libro['cantidad'] ?>" required><br/>

	                    <label>Descripcion:</label>
	                    <input type="text" name="descripcion" value="<?php echo $libro['descripcion_libro'] ?>"><br/>

	                    <label>Imagen:</label>
                    	<input type="file" name="ruta_imagen"><br/>

                    	<input type="hidden" name="id_libro" value="<?php echo $_GET['id_libro'] ?>">

	                    <input type="submit" name="editar" value="Guardar">
	                </form>
	            </div>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>