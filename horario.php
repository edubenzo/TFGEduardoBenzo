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
			<h2>Modificar horario</h2>
			<hr />





<form  action="gestionHora.php" method="post">
<table>
  <tr>
    <td>hora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</td>
    <td>L&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>M&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>X&nbsp;&nbsp;&nbsp;&nbsp;</td>
 <td>J&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>V&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>S&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>D&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>

<tr>
    <td>00:00-01:00</td>
    <td><select name="00" > <option value="off">off</option>  <option value="on">on</option>    </select> </td>
    <td><select name="10" > <option value="off">off</option>  <option value="on">on</option>    </select> </td>
    <td><select name="20" > <option value="off">off</option>  <option value="on">on</option>    </select> </td>
    <td><select name="30"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="40"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="50"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="60"> <option value="off">off</option>  <option value="on">on</option>    </select> </td>
  </tr>

<tr>
    <td>01:00-02:00</td>
    <td><select name="01"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="11"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="21"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="31"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="41"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="51"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="61"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>

<tr>
    <td>02:00-03:00</td>
    <td><select name="02"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="12"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="22"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="32"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="42"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="52"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="62"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>

<tr>
    <td>03:00-04:00</td>
    <td><select name="03"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="13"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="23"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="33"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="43"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="53"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="63"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>

  
  
  
  
  
  <tr>
    <td>00:04-05:00</td>
    <td><select name="04" > <option value="off">off</option>  <option value="on">on</option>    </select> </td>
    <td><select name="14" > <option value="off">off</option>  <option value="on">on</option>    </select> </td>
    <td><select name="24" > <option value="off">off</option>  <option value="on">on</option>    </select> </td>
    <td><select name="34"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="44"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="54"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="64"> <option value="off">off</option>  <option value="on">on</option>    </select> </td>
  </tr>

<tr>
    <td>05:00-06:00</td>
    <td><select name="05"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="15"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="25"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="35"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="45"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="55"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="65"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>

<tr>
    <td>06:00-07:00</td>
    <td><select name="06"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="16"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="26"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="36"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="46"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="56"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="66"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>

<tr>
    <td>07:00-08:00</td>
    <td><select name="07"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="17"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="27"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="37"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="47"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="57"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="67"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  <tr>
    <td>08:00-09:00</td>
    <td><select name="08"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="18"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="28"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="38"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="48"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="58"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="68"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>

<tr>
    <td>09:00-10:00</td>
    <td><select name="09"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="19"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="29"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="39"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="49"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="59"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="69"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>10:00-11:00</td>
    <td><select name="010"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="110"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="210"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="310"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="410"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="510"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="610"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>11:00-12:00</td>
    <td><select name="011"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="111"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="211"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="311"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="411"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="511"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="611"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>12:00-13:00</td>
    <td><select name="012"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="112"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="212"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="312"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="412"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="512"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="612"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>13:00-14:00</td>
    <td><select name="013"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="113"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="213"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="313"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="413"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="513"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="613"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>14:00-15:00</td>
    <td><select name="014"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="114"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="214"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="314"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="414"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="514"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="614"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>15:00-16:00</td>
    <td><select name="015"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="115"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="215"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="315"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="415"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="515"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="615"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>16:00-17:00</td>
    <td><select name="016"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="116"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="216"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="316"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="416"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="516"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="616"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>17:00-18:00</td>
    <td><select name="017"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="117"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="217"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="317"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="417"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="517"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="617"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  <tr>
    <td>18:00-19:00</td>
    <td><select name="018"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="118"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="218"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="318"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="418"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="518"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="618"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  <tr>
    <td>19:00-20:00</td>
    <td><select name="019"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="119"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="219"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="319"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="419"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="519"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="619"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  
  
  <tr>
    <td>20:00-21:00</td>
    <td><select name="020"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="120"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="220"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="320"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="420"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="520"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="620"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  <tr>
    <td>21:00-22:00</td>
    <td><select name="021"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="121"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="221"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="321"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="421"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="521"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="621"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  <tr>
    <td>22:00-23:00</td>
    <td><select name="022"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="122"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="222"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="322"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="422"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="522"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="622"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>
  <tr>
    <td>23:00-00:00</td>
    <td><select name="023"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="123"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="223"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="323"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="423"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="523"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
    <td><select name="623"> <option value="off">off</option>  <option value="on">on</option>    </select></td>
  </tr>



</table>
    <p>
        
        <div class="form-group">
					<label >id_grupo</label>
					
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
        
        
        
    </p><br/>
        
        <input type="submit" value="enviar">
</form>

 </div>
	</div><center>
	<p>&copy; Family Safe <?php echo date("Y");?></p
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>