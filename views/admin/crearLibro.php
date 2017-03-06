<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				 <h1>CREAR LIBRO </h1>
				 <div class="form"> 

	                <form action="../../controllers/libroController.php" method="post">
	                    <label>Titulo:</label>
	                    <input type="text" name="titulo"><br/>

	                    <label>Autor:</label>
	                    <input type="text" name="autor"><br/>
	                    
	                    <label>Categoria:</label>
	                    <input type="text" name="categoria"><br/>

	                    <label>Cantidad:</label>
	                    <input type="text" name="cantidad"><br/>

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