<?php include 'html.php'; ?>

<body>
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>

			<article>
				  <h1>LISTAR USUARIOS </h1>
				  <?php  
					  	$usuarios = getListaUsuario();
					  	echo "<table width='100%'>";
					  		echo "<tr>";
					  			echo "<th>Nombre</th>";
					  			echo "<th>Rol</th>";
					  			echo "<th>Cuenta</th>";
					  			echo "<th></th>";
					  			echo "<th></th>";
					  		echo "</tr>";

					 		foreach ($usuarios as $usuario): 
								echo "<tr>";
									echo "<td>".$usuario['usuario']."</td>";
									echo "<td>".$usuario['nombre_tipo_usuario']."</td>";
									echo "<td>".$usuario['cuenta']."</td>";
									echo "<td>";
										echo "<a href='usuarioEditar.php?id_usuario=".$usuario['id_usuario']."'>Editar</a>";
									echo "</td>";
									echo "<td>";
										echo "<a href='#'>Eliminar</a>";
									echo "</td>";
								echo "</tr>";
							endforeach;
						echo "</table>";
					?>
				  
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>