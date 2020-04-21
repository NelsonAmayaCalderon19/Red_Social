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
	<link rel="stylesheet" type="text/css" href="css/styles_recuperar_user.css">
</head>
<body>
<div id="contenedor">
	<div id="logo">
		<img src="imagen/red_Social.png" width="64%;" height="100%" title="red_social" id="imgen">
	</div>
	<div id=campos>
		<br>
		<br>
		<h1>RECUPERAR USUARIO</h1>
<a href="index.php" style="text-decoration: none;"><i class="fa fa-arrow-circle-left" aria-hidden="true" id="volver"></i></a>
	<br><br>
<h3>Introduce tu Email</h3>
<form action="Controlador/proceso_recuperar_usuario.php" name="formulario" method="POST">
<span class="input-group-text" id="span1"><i class="fa fa-envelope" id="icon1"></i></span>
<input type="email" name="email" id="email" autocomplete="off" pattern="^[\w._%-]+@[\w.-]+\.[a-zA-Z]{2,4}$">
<h3>Contraseña</h3>
<span class="input-group-text" id="span3"><i class="fa fa-lock" id="icon1"></i></span>
<input type="password" class="form-control input-sm" autocomplete="off" id="password" name="password"><span class="input-group-text" id="span4"><i class="fa fa-eye" onclick="showP()" id="icon2"></i></span>
<input type="submit" name="btn_registrar" id="btn_registrar" value="Aceptar">
</form>
</div>
</div>
 <?php include "includes/footer.php" ?> 
<script src="javaScript/recuperar_user.js"></script>
</body>
</html>
