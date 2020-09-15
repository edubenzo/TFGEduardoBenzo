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
	<title>Grupos</title>

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
			<h2>Lista de horas</h2>
			<hr />

			
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
                    
					<th>id</th>
					
                    <th>dia</th>
                    <th>hora</th>
                    <th>grupo</th>
				</tr>
				<?php
				
					$sql ="SELECT * FROM wifi ORDER BY id_grupo ASC";
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
                                            if ($row['dia']==0){
                                                $row['dia']="lunes";
                                               
                                              
                                            }
                                            elseif ($row['dia']==1){
                                                $row['dia']="martes";
                                            }
                                            elseif ($row['dia']==2){
                                                $row['dia']="miercoles";
                                            }
                                            elseif ($row['dia']==3){
                                                $row['dia']="jueves";
                                            }
                                            elseif ($row['dia']==4){
                                                $row['dia']="viernes";
                                            }
                                            
                                            elseif ($row['dia']==5){
                                                $row['dia']="sabado";
                                            }
                                            elseif ($row['dia']==6){
                                                $row['dia']="domingo";
                                            }
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id'].'</td>
                                                             <td>'.$row['dia'].'</td>
							<td>'.$row['hora'].":00".'</td>
                                                       
							<td>'.$row['id_grupo'].'</td>
							';
							
                            
						echo '
							
							
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
