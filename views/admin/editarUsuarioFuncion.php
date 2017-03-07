<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php 
				include 'admin_cabecera.php'; 
				include '../../controllers/rolController.php';
				$roles = getListaRol();
				$usuario = buscarUsuario($_SESSION['id_usuario']);
			?>


			<article>
				 <h1>EDITAR USUARIO </h1>
				 <div class="form"> 

	                <form action="../../controllers/usuarioDataController.php" method="post">
	                    <label>Nombres:</label>
	                    <input type="text" name="nombre" value="<?php echo $usuario['nombres'] ?>" required><br/>

	                    <label>Apellidos:</label>
	                    <input type="text" name="apellido" value="<?php echo $usuario['apellidos'] ?>" required><br/>
	                    
	                    <label>Cuenta:</label>
	                    <input type="text" name="cuenta" value="<?php echo $usuario['cuenta'] ?>" required><br/>

	                    <label>Contraseña:</label>
	                    <input type="password" name="password" value="<?php echo $usuario['contrasenia'] ?>" required><br/>

	                    <input type="hidden" name="rol" value="<?php echo $usuario['id_tipo_usuario'] ?>">

						<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario'] ?>">

	                    <input type="submit" name="editarUsuario" value="Guardar">
	                </form>
	            </div>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>