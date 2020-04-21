<?php 
session_start();
  	$usur = $_SESSION["usuario"];
  	$dato =$_GET['variable1'];
include("../conexion/conexion.php");
$query = "UPDATE  seguidor as se SET se.Id_Estado='2' WHERE se.Usuario_Seg='$dato' and  se.Usuario='$usur' or se.Usuario='$dato' and  se.Usuario_Seg='$usur' ";
$resultado = $con->query($query);

	/*$query2 = "UPDATE seguidor SET Id_Estado='2' WHERE Usuario ='$dato' and Usuario_Seg='$usur'";
$resultado2 = $con->query($query2);*/
if($resultado){
     echo '<script type="text/javascript">       
        window.location.href=" ../perfil_amigo.php?amigo='.$dato.'";
        </script>';       

}else{
 print "<script>alert('Error: Al Intentar Bloquear a:".$dato."')</script>"; 
   echo '<script type="text/javascript">      
        window.location.href=" ../perfil_amigo.php?amigo='.$dato.'";
        </script>'; 
}
 ?>