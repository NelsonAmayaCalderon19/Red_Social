<?php
require '../PHPMailer/PHPMailerAutoload.php';
include("../conexion/conexion.php");
$dato =$_POST['email'];
$us =$_POST['usuario'];
$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '587';
	$mail->Username = 'nelsonamayacalderon@gmail.com'; 	
	$mail->Password = 'nelsonamayacalderon12345'; 	
	$mail->setFrom('nelsonamayacalderon@gmail.com', 'Soporte Tecnico Red Social');
	$select_buscar=$con->prepare("
			SELECT * FROM persona as p, usuario as us WHERE us.Usuario=p.Usuario and p.Usuario='".$us."' and  p.Email= :campo;"
		);
		$select_buscar->execute(array(
			':campo' =>"".$_POST["email"].""
		));
		$resultado=$select_buscar->fetchAll();
foreach ($resultado as $fila): {
	$password = $fila["Password"];
	$correo_receptor = $dato;
	$mail->addAddress($correo_receptor, 'Email');	
	$mail->Subject = 'Proceso de Recuperacion de Password';
	$mail->Body ='<div style="margin: auto; width: 700px; height: auto; background-color: #1E69C3; border-radius: 20px; padding-top: 10px;">
	<div style=" background-color: white; margin-right: 15px; margin-left: 15px; padding: 10px 10px 10px 10px; border-radius: 10px; margin-top: 5px;">
	<h1 style="color: red; font-family: times new roman; font-size: 25px; text-align: center; font-weight: bold;">Recuperación de Contraseña</h1><h3 style="color: black; font-family:times new roman; font-size: 20px;"><b>Tu Password es:</b> ' .$password.  '</h3></div><div contenteditable="false" style="text-align: center; margin: auto;
  position: relative;
  top: auto;
  width: 500px;
  height: 50px;
  color: white;
  font-size: 20px; font-family: verdana; padding-bottom: 8px;">2020 © All Rights Reserved. Desarrollado por:<br>Red Social</div>'; 
	$mail->IsHTML(true);
	}endforeach;
	if($mail->send()){
		header("Location: ../index.php");
		} else {
		header("Location: ../recuperar_password.php");
	}
	?>