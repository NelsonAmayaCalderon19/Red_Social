<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon"  href="imagen/red_social.png">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
<script src="javaScript/jquery-3.2.1.min.js"></script>
<script src="javaScript/alertifyjs/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_registro.css">
</head>
<body>
 <div id="contenedor">
    <div id="logo">
        <img src="imagen/red_social.png" width="64%;" height="100%" title="red_social" id="imgen">
    </div>
    <div id=campos>
<div id="cont">
<h1>REGISTRO DE NUEVO USUARIO</h1>
<a href="index.php" style="text-decoration: none;" id="volver" title="Volver"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a><br>
<form id="frmRegistro">
    <h4>Usuario</h4>
<span class="input-group-text" id="span1"><i class="fa fa-user" id="icon1"></i></span>
<input type="text" class="form-control input-sm" id="usuario" name="" autocomplete="off">
<h4>Nombre</h4>
<span class="input-group-text" id="span1"><i class="fa fa-user" id="icon1"></i></span>
<input type="text" class="form-control input-sm" id="nombre" name="" autocomplete="off">
<h4>Email</h4>
<span class="input-group-text" id="span2"><i class="fa fa-envelope" id="icon1"></i></span>
<input type="email" class="form-control input-sm" id="email" autocomplete="off" name="" pattern="^[\w._%-]+@[\w.-]+\.[a-zA-Z]{2,4}$">
<h4>Contraseña</h4>
<span class="input-group-text" id="span3"><i class="fa fa-lock" id="icon1"></i></span>
<input type="password" class="form-control input-sm" autocomplete="off" id="password" name=""><span class="input-group-text" id="span4"><i class="fa fa-eye" onclick="showP()" id="icon2"></i></span>
<br>
<input type="checkbox" name="" id="check" required=""><label>Acepto los términos y condiciones del servicio<br><a href="condiciones.php" id="condiciones">Ver terminos y condiciones</a></label><br>
<span class="btn btn-primary" id="registrarNuevo" >Registrar</span>
</form>
    </div>
</div>
</div>
 <?php include "includes/footer.php" ?> 
</body>
</html>
<script src="javaScript/registro.js"></script>
<script src="javaScript/registro2.js"></script>