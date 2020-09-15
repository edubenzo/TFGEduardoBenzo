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
        <title>Modificar nombre</title>
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
                        <h2>Contraseña modificada</h2>
                        <hr />

<?php
$comando='sudo /usr/bin/python3.7 /var/www/html/pass.py '.$_POST["pass"];
shell_exec($comando);
shell_exec('sudo service hostapd restart');
?>

        </div><center>
 <p>&copy; Family Safe <?php echo date("Y");?></p
                </center>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery$
        <script src="js/bootstrap.min.js"></script>
</body>
</html>

