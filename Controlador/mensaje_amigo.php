<?php 
session_start();
  	$usur = $_SESSION["usuario"];
  	$dato =$_GET['variable1'];
  	$mensaje = $_GET['cuerpo_mensaje'];
include("../conexion/conexion.php");
$query = "INSERT INTO bandeja_mensaje(Usuario,Usuario_Mensaje,Contenido,Fecha_Hora,Estado) VALUES('$usur','$dato','$mensaje', NOW(),2)";
$resultado = $con->query($query);
if($resultado){
   echo '<script type="text/javascript">      
        window.location.href=" ../perfil_amigo.php?amigo='.$dato.'";
        </script>'; 
}else{
echo "No se Inserto";
}
?>