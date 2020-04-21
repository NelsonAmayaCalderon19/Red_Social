<?php 
session_start();
  	$usur = $_SESSION["usuario"];
  	$dato =$_GET['variable1'];
include("../conexion/conexion.php");
  $query2 = "INSERT INTO seguidor(Usuario,Usuario_Seg,Id_Estado) VALUES('$usur','$dato', '1')";
$resultado2 = $con->query($query2);
if($resultado2){
     echo '<script type="text/javascript">      
        window.location.href=" ../perfil_amigo.php?amigo='.$dato.'";
        </script>';     

}

  $query2 = "UPDATE seguidor SET Id_Estado='1' WHERE Usuario ='$usur' and Usuario_Seg='$dato'";
$resultado2 = $con->query($query2);
if($resultado2){
     echo '<script type="text/javascript">       
        window.location.href=" ../perfil_amigo.php?amigo='.$dato.'";
        </script>';       

}else{
 print "<script>alert('Error: Al Intentar Agregar a:".$dato."')</script>"; 
   echo '<script type="text/javascript">      
        window.location.href=" ../perfil_amigo.php?amigo='.$dato.'";
        </script>'; 
}



?>