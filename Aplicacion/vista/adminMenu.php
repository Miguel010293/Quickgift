<?php
session_start();
error_reporting(0);
$adminsesion =$_SESSION['admin']; 
if($adminsesion== '' && $adminsesion== null ){
 
	echo "<script>
	alert('Lo sentimos debe inciar sesión para ver esta pagina');
	window.location='adminLogin.php';
	</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
	<title>Modulo Anfitrión</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
	<div class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<br>
				<a class="brand" href="adminMenu.php" name="top">QuickGift</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="adminMenu.php"><i class="icon-home icon-white"></i>Inicio</a></li>
						<li class="divider-vertical"></li>
						<li><a href="FormPersona.php"><i class="icon-user icon-white"></i>Personas</a></li>
						<li class="divider-vertical"></li>
						<li><a href="FormPersonaAsiste.php"><i class="icon-thumbs-up icon-white"></i> Asisten</a></li>
						<li class="divider-vertical"></li>
						<li><a href="FormPersonaRechaza.php"><i class="icon-thumbs-down icon-white"></i> No Asisten</a></li>
						<li class="divider-vertical"></li>
						<li><a href="FormRegalo.php"><i class="icon-gift icon-white"></i> Regalo</a></li>
						<li class="divider-vertical"></li>
					</ul>
					<div class="btn-group pull-right divider-vertical  ">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="../config/cerrar.php">
							<i ></i> Cerrar sesión <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							
							
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
			<!--/.container-fluid -->
		</div>
		<!--/.navbar-inner -->
	</div>
	<!--/.navbar -->
	
	<script type="text/javascript">
		
	</script>
	

	<style>

	</style>
</body>

</html>