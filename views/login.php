
<!DOCTYPE>
<html>
	<head>
		<title>PHP</title>

		<link type="text/css" rel="stylesheet" href="../public/css/estilos.css"/>
	</head>

	<body>

		<div class="login">
      
        	<form class="login" action="../controllers/autentificar.php" method="post">
        		<div class="container">

        			<label class="login"><b>Usuario</b></label>
        			 <input class="login" type="text" placeholder="Nombre de usuario" name="cuenta" required>

        			 <label class="login"><b>Contraseña</b></label>
    				<input class="login" type="password" placeholder="Ingrese Password" name="contrasenia" required>

                    <?php

                        if($_GET['error_usuario'] == "si")
                            echo "<label class='login_error'><b>usuario no valido</b></label>";
                    ?>

    				<button class="login" type="submit" name="enviar" value="Ingresar">Login</button>
        		</div>
         	</form>
			
         
      	</div> 

	</body>
</html>