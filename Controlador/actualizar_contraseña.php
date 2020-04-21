<?php 
session_start();
  	
  	include("../conexion/conexion.php");
  	$usur = $_SESSION["usuario"];
  	$pass = $_POST['password'];
  	$query ="UPDATE usuario SET Password='$pass' WHERE Usuario='$usur'";
$resultado = $con->query($query);
if($resultado){
 echo '<script type="text/javascript">      
        window.location.href="../mi_perfil.php";
        </script>';
}else{
	print "<script>alert('Error:')</script>"; 
   echo '<script type="text/javascript">      
        window.location.href="../mi_perfil.php";
        </script>';
}


?>