<?php
session_start();
include("config.php");
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar horario</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
 <body>
     <nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
<div class="container">
		<div class="content">
			<h2>Modificar configuracion</h2>
			<hr />

                        <form  action="cambiarNombre.php" method="post">
                        <p>Nombre Wi-Fi: <input type="text" name="red" size="40"></p>
                        <input type="submit" value="Enviar">
                        </form>
<br>
<br>
                        <form  action="cambiarPass.php" method="post">
                        <p>Contraseña: <input type="text" name="pass" size="40"></p>
                        <input type="submit" value="Enviar">
                        </form>
                        
                        
                        </div>
	</div><center>
	<p>&copy; Family Safe <?php echo date("Y");?></p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
