<?php 
session_start();
  	
  	include("../conexion/conexion.php");
  	$usur = $_SESSION["usuario"];
  	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  	$query ="UPDATE persona SET Imagen_Perfil='$imagen' WHERE Usuario='$usur'";
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