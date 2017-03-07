<header>
	<div>
		<h1>Libreria Virtual</h1>

		<h5 style="text-align: left;">
		<?php 
			include '../../controllers/usuarioController.php'; 

						$usuarios = getDatosUsuario($_SESSION['id_usuario']);

						foreach ($usuarios as $usuario): 
							echo "Rol: ".$usuario['nombre_tipo_usuario']." usuario:".$usuario['usuario'];

						endforeach;
		?>
		</h5>
			<h5 style="text-align: right;"><a href="../../controllers/logout.php">Cerrar Sesion</a></h5>
			
		
	</div>
</header>
<?php include 'menu.php'; ?>