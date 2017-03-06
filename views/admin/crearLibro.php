<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				 <h1>CREAR LIBRO </h1>
				 <div class="form"> 

	                <form action="../../controllers/libroController.php" method="post">
	                    <label>Titulo:</label>
	                    <input type="text" name="titulo" required><br/>

	                    <label>Autor:</label>
	                    <input type="text" name="autor" required><br/>
	                    
	                    <label>Categoria:</label>
	                    <input type="text" name="categoria" required><br/>

	                    <label>Cantidad:</label>
	                    <input type="text" name="cantidad" required><br/>

	                    <label>Descripcion:</label>
	                    <input type="text" name="descripcion"><br/>

	                    <label>Imagen:</label>
                    	<input type="file" name="ruta_imagen"><br/>

	                    <input type="submit" name="crear" value="Guardar">
	                </form>
	            </div>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>