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
	<title>Datos de Dispositivos</title>

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
		<?php include('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Lista de Dispositivos</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				
				$nik = (strip_tags($_GET["nik"],ENT_QUOTES));
				$cek = "SELECT * FROM dispositivos WHERE id='$nik'";
                                $result = $mysqli->query($cek);
				if($result->num_rows ==0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete ="DELETE FROM dispositivos WHERE id='$nik'";
                                        $result4 = $mysqli->query($delete);
					if($result4){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>id</th>
					<th>Nombre</th>
                    <th>MAC</th>
                    <th>grupo</th>
					
                    <th>Acciones</th>
				</tr>
				<?php
				
					$sql ="SELECT * FROM dispositivos ORDER BY id ASC";
				$result2 = $mysqli->query($sql);
				if($result2->num_rows ==0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = $result2->fetch_assoc()){
					$id=$row['id_grupo'];
                                            $id2 = ("SELECT nombre FROM grupos WHERE id='$id'");
                                $id3 = $mysqli->query($id2);
                                $fila= mysqli_fetch_array($id3);
				$row['id_grupo']=$fila['nombre'];
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id'].'</td>
							<td>'.$row['nombre'].'</td>
                            <td>'.$row['MAC'].'</td>
                            <td>'.$row['id_grupo'].'</td>
							
							';
							
                            
						echo '
							
							<td>

								<a href="editUsuarios.php?nik='.$row['id'].'" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="index.php?aksi=delete&nik='.$row['id'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</div><center>
	<p>&copy; Family Safe <?php echo date("Y");?></p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
