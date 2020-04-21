<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="shortcut icon"  href="imagen/red_social.png">
	<title>Red Social</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
<script src="javaScript/jquery-3.2.1.min.js"></script>
<script src="javaScript/alertifyjs/alertify.js"></script>	
<link rel="stylesheet" type="text/css" href="css/styles_index.css">
</head>
<body>
<div id="contenedor">
	<div id="logo">
		<img src="imagen/red_social.png" width="64%;" height="100%" title="red_social" style="">
	</div>	
	<div id=campos>
		<div id="options">
		<div id="registrarte">
			<h4 id="notiene">¿No tienes Cuenta?</h4>
		<a id="registrate" href="registro.php">REGISTRATE</a>
		</div>
		<div id="acceder">
		</div>
	</div>
	<br>
	<div>
		<form action="Controlador/Comprobar_Login.php" method="get" >
		<div id="credenciales">
			<h3>Nombre de Usuario o Correo Electrónico</h3>
			<span class="input-group-text" id="span1"><i class="fa fa-user" id="icon1"></i></span>
			<input type="text" name="usuario" id="usuario" autocomplete="off">                              <h3>Contraseña</h3>
			<span class="input-group-text" id="span2"><i class="fa fa-lock" id="icon2"></i></span>
			<input type="password" name="password" id="password" autocomplete="off"><span class="input-group-text" id="span3"><i class="fa fa-eye" onclick="showP()" id="icon2"></i></span>
			<div align="mensaje">
                 <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <center><h2>¡Credenciales Incorrectas!</h2></center>
                <?php endif; ?>
            </div>
		</div>
		<div id="campos2">
			<div id="olvido">
				<br>
				<a href="recuperar_password.php" id="olvi_password">Olvido su Contraseña?</a><br>
				<a href="recuperar_user.php" id="olvi_user">Olvido su Nombre de Usuario?</a>
			</div>
			<div id="boton_ingresar">
				<input type="submit" name="btn_acceder" id="btn_acceder" value="Entrar">
			</div>
</form>
		</div><br><br>
		<div id="face_google">
		<input type="submit" name="btn_face" id="btn_face" value="CONECTAR CON FACEBOOK"><br>
			<input type="submit" name="btn_google" id="btn_google" value="CONECTAR CON GOOGLE"><br>
			<input type="submit" name="btn_twitter" id="btn_twitter" value="CONECTAR CON TWITTER">
		</div>
</div>
</div>
</div>
    <script src="javaScript/index.js"></script>
</body>
</html>
