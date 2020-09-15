<?php
session_start();
include("config.php");
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



    

for ($i = 0; $i <= 6; $i++) {
    $nombreGrupo=$_POST["nombreGrupo"];
     $ce = ("SELECT id FROM grupos WHERE nombre='$nombreGrupo'");
                                $id = $mysqli->query($ce);
                                $fila= mysqli_fetch_array($id);
				$id_grupo=$fila['id'];
    
    for ($j = 0; $j <= 23; $j++) {
        
        if ($_POST[$i.$j]=='on'){
           
            $sq2 = "select * from wifi where hora='$j' and dia='$i' and id_grupo='$id_grupo'" ;
            $result2 = $mysqli->query($sq2);
            if($result2->num_rows ==0){
                 $sql = "INSERT INTO wifi (hora,dia,id_grupo) VALUES(?,?,?)" ;
 if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $j,$i, $id_grupo);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
 header("location: index.php");
        }
        }}}
    else{
        $sq2 = "delete from wifi where hora=? and dia=? and id_grupo=?" ;
        if($stmt = $mysqli->prepare($sq2)){
        $stmt->bind_param("sss", $j,$i, $id_grupo);
        if($stmt->execute()){
 header("location: index.php");
        }
        }
        }
   



}


}
    
    // Close connection
    $mysqli->close();

?>
