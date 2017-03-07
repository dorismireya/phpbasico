<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				 <h1>CREAR ROL </h1>
				 <div class="form"> 

	                <form action="../../controllers/rolDataController.php" method="post">
	                    <label>Rol:</label>
	                    <input type="text" name="rol" required><br/>

	                    <input type="submit" name="crear" value="Guardar">
	                </form>
	            </div>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>