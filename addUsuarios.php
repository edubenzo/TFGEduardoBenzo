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
	<title>Agregar Usuarios</title>

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
			<h2>Datos del  dispositivos &raquo; Agregar datos</h2>
			<hr />
                        

			<?php
			if(isset($_POST['add'])){
				
				$nombre		     =  strip_tags($_POST["nombre"]);
				$MAC	 =  strip_tags($_POST["MAC"]);
				$nombreGrupo	 =  strip_tags($_POST["nombreGrupo"]);
                                $ce = ("SELECT id FROM grupos WHERE nombre='$nombreGrupo'");
                                $id = $mysqli->query($ce);
                                $fila= mysqli_fetch_array($id);
				$id_grupo=$fila['id'];
                               
				
			

				$cek = ("SELECT * FROM dispositivos WHERE MAC='$MAC'");
                                $result = $mysqli->query($cek);
				if($result->num_rows ==0){
						$insert = ("INSERT INTO  dispositivos(nombre, MAC, id_grupo )VALUES('$nombre', '$MAC', '$id_grupo')");
						$result2 = $mysqli->query($insert);									
						if($result2&&preg_match('/^[a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}[:-][a-f0-9]{2}$/i',$MAC)){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. el dispositivo  existe!</div>';
				}
			}
			?>

			<form class="form-horizontal" action="" method="post">
				
				<div class="form-group">
					<label class="col-sm-3 control-label">nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" class="form-control" placeholder="nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">MAC</label>
					<div class="col-sm-4">
						<input type="text" name="MAC" class="form-control" placeholder="MAC" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">grupo</label>
					<div class="col-sm-4">
                                            <?php
            
            $sql3 = "SELECT nombre FROM `grupos`";
            $result3 = $mysqli->query($sql3);
            echo "<select name='nombreGrupo'>";
            while ($row = mysqli_fetch_array($result3)) {
                echo "<option value='".$row['nombre']."'>" . $row['nombre'] . "</option>";
            }
            echo "class='form-control' placeholder='nombreGrupo'  required> </select>";
        ?>
						
					</div>
				 </div>
				
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>
