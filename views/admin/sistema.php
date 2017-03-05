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
	<div class="container">
			<?php include 'admin_cabecera.php'; ?>
			
			<?php include 'menu.php'; ?>

			<?php //ECHO $nombre   = $_SESSION['id_usuario'];  ?>
			<article>
				  <h1>London</h1>
				  <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
				  <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
			</article>
			<?php include 'footer.php'; ?>
	</div>
</body>
</html>