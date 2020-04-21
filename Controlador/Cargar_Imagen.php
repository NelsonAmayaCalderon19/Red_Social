<?php 
session_start();
	$usur = $_SESSION["usuario"];
include("../conexion/conexion.php");
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query = "INSERT INTO imagen(Usuario,Imagen,Fecha_Hora) VALUES('$usur','$imagen', NOW())";
$resultado = $con->query($query);
if($resultado){
header("location: ../mi_perfil.php");
}else{
echo "No se Inserto";
}
 ?>