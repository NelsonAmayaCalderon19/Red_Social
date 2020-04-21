<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Comprobación Login</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
include_once '../conexion/conexion.php'; 
try{
$sql="SELECT * FROM usuario as user, persona as per WHERE user.Usuario= :usuario AND user.Password= :password OR per.Email= :usuario AND user.Password= :password";
$resultado=$con->prepare($sql);
$login=htmlentities(addslashes($_GET["usuario"]));
$password=htmlentities(addslashes($_GET["password"]));
$resultado->bindValue(":usuario", $login);
$resultado->bindValue(":password", $password);
if(empty($password) or empty($login)){
	header("Location: ../index.php?error=true");
}
else
$resultado->execute();
$numero_registro=$resultado->rowCount();
?>
<?php
		$select_buscar=$con->prepare("
			SELECT * FROM PERSONA WHERE Email= :campo;"
		);
		$select_buscar->execute(array(
			':campo' =>"".$_GET["usuario"].""
		));
		$resultado=$select_buscar->fetchAll();
	?>
			<?php foreach($resultado as $fila): 
				$login = $fila["Usuario"];?>		
	 <?php endforeach?>
	 <?php
if ($numero_registro!=0) {
	session_start();
	$_SESSION["usuario"]= $login;
	header("location:../principal.php");
}else{
	 header("Location: ../index.php?error=true");
}
}catch(Exception $e){
die("Error " . $e.getMessage());
}
?>
</body>
</html>
