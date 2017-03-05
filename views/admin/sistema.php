<?php
	session_start();
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sistema</title>

	<link type="text/css" rel="stylesheet" href="../../public/css/admin_estilo.css"/>
</head>
<body>
	<?php include 'admin_cabecera.php'; ?>
	
	<?php ECHO $nombre   = $_SESSION['id_usuario'];  ?>
</body>
</html>