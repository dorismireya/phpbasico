<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php 
				include 'admin_cabecera.php'; 
				include '../../controllers/rolController.php';
				$roles = getListaRol();
			?>

			<article>
				 <h1>CREAR USUARIO </h1>
				 <div class="form"> 

	                <form action="../../controllers/usuarioDataController.php" method="post">
	                    <label>Nombres:</label>
	                    <input type="text" name="nombre" required><br/>

	                    <label>Apellidos:</label>
	                    <input type="text" name="apellido" required><br/>
	                    
	                    <label>Cuenta:</label>
	                    <input type="text" name="cuenta" required><br/>

	                    <label>Contraseña:</label>
	                    <input type="password" name="password" required><br/>

	                    <label>Rol:</label>
	                    <select name="rol">
	                    	<?php 
	                    		foreach ($roles as $rol):
	                    			echo "<option value='".$rol['id_tipo_usuario']."'>".$rol['nombre_tipo_usuario']."</option>";
	                    		endforeach;
                    		?>
						</select>


	                    <input type="submit" name="crear" value="Guardar">
	                </form>
	            </div>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>