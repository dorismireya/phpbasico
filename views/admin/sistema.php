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
	<table width="100%">
		<tr>
			<td width="20%">
				<?php include 'menu.php'; ?>
			</td>
		</tr>
	</table>
	<?php //ECHO $nombre   = $_SESSION['id_usuario'];  ?>
</body>
</html>