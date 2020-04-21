<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon"  href="imagen/red_social.png">
	<title>Red Social</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
 <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
<script src="http://codeseven.github.com/toastr/toastr.js"></script>
<link href="http://codeseven.github.com/toastr/toastr.css" rel="stylesheet"/>
<link href="http://codeseven.github.com/toastr/toastr-responsive.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
<script src="javaScript/jquery-3.2.1.min.js"></script>
<script src="javaScript/alertifyjs/alertify.js"></script>
	<?php
	session_start();
	if (!isset($_SESSION["usuario"])) {
	header("location:index.php");
}
	include_once 'conexion/conexion.php';
		$select_buscar=$con->prepare("
			SELECT * FROM PERSONA WHERE Usuario= :campo;"
		);
		$select_buscar->execute(array(
			':campo' =>"".$_SESSION["usuario"].""
		));
		$resultado=$select_buscar->fetchAll();
	?>
			<?php foreach($resultado as $fila): 
				$login = $fila["Usuario"];
				$login2 = $fila["Nombre"];?>		
	 <?php endforeach?>	 
   <?php 
if (!isset($_SESSION["usuario"])) {
  header("location:index.php");
}
   ?>
<link rel="stylesheet" type="text/css" href="css/styles_configuracion.css">
</head>
<body>
<?php include "includes/header.php" ?>
<a href="principal.php" style="text-decoration: none;"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="float: right; font-size: 3em; margin-right: 2%;"></i></a>
      <div id="contenedor">
        <div id="listado">
    <h4 id="cambiar_imagen">Actualizar Imagen de Perfil</h4>
  </div><br>
	
	<br>
    <form action="Controlador/actualizar_imagen_perfil.php" method="post" name="tuformulario" enctype="multipart/form-data">
	<div id="div_file">
        <label for="file" class="input-file__btn"  style="background-color: #22D102; cursor: pointer; border-radius: 10px; margin-right: 20px; color: white; padding-left: 10px; padding-right: 10px;">Cargar Imagen</label>
            <label for="" class="input-file__field"></label>
            <input type="file" id="file" class="input-file__input" name="imagen" accept="image/jpg,
            image/png,image/jpeg">           
            <button type=button onclick="pregunta();" name="Aceptar"  class="btn-Agregar btn-primary" id="btn-Agregar"  disabled="disabled">Agregar</button>
  </div></form><br>
</div>
 <div id="contenedor">
<div id="listado">
    <h4 id="cambiar_imagen">Actualizar Contraseña</h4>
  </div><br>
  <form action="Controlador/actualizar_contraseña.php" method="post" name="tuformulario2" enctype="multipart/form-data">
  <div id="div_file">
    <label  style="margin-right: 15px; padding-top: 10px;">Nueva Contraseña:</label>
    <input type="password" name="password" id="password"  style="margin-right: 10px;">
    <button type=button onclick="pregunta2();" name="Confirmar"  class="btn-Confirmar btn-primary" id="btn-Confirmar"  >Confirmar</button>
  </div>
</form>
	   </div>       
     <?php include "includes/footer.php" ?> 
    <script src="javaScript/jquery-3.3.1.min.js"></script>
     <script src="javaScript/configuracion.js"></script>
    <script src="javaScript/scripts.js"></script>
</body>
</html>