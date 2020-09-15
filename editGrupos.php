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
	<title>Datos de Usuarios</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos de Grupos &raquo; Editar datos</h2>
			<hr />
			
			<?php
			// escaping, additionally removing everything that could be (html/javascript-) code
			$nik = strip_tags($_GET["nik"],ENT_QUOTES);
			$sql = "SELECT * FROM grupos WHERE id='$nik'";
                        $result = $mysqli->query($sql);
			if($result->num_rows ==0){
				header("Location: verGrupos.php");
			}else{
				$row = $result->fetch_assoc();
			}
			if(isset($_POST['save'])){
				$id		     = (strip_tags($_POST["id"]));
				$nombre		     = (strip_tags($_POST["nombre"]));
				
				 
				
				$update = "UPDATE grupos SET nombre='$nombre' WHERE id='$nik'";
                                $result2 = $mysqli->query($update);
				if($result2){
					header("Location: editGrupos.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				
				<div class="form-group">
					<label class="col-sm-3 control-label">nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" value="<?php echo $row ['nombre']; ?>" class="form-control" placeholder="nombre" required>
					</div>
				</div>
				
				
                   
                
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
                                                <a href="verUsuarios.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
</body>
</html>