<header class="admin">
	<div>
		<h1 class="logo">Libreria Virtual</h1>

		<?php 
			include '../../controllers/usuarioController.php'; 

						$usuarios = getDatosUsuario($_SESSION['id_usuario']);

						foreach ($usuarios as $usuario): 
							echo "Rol: ".$usuario['nombre_tipo_usuario']." usuario:".$usuario['usuario'];

						endforeach
		?>
		<nav>
			<a href="../../controllers/logout.php">Cerrar Sesion</a>
			
		</nav>
		
	</div>
</header>