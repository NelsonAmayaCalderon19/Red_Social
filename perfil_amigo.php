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
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://codeseven.github.com/toastr/toastr.js"></script>
<link href="http://codeseven.github.com/toastr/toastr.css" rel="stylesheet"/>
<link href="http://codeseven.github.com/toastr/toastr-responsive.css" rel="stylesheet"/>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
<script src="javaScript/alertifyjs/alertify.js"></script>
  <?php
  $amigo=$_GET['amigo'];
  session_start();
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
<link rel="stylesheet" type="text/css" href="css/styl_perfil_amigo.css">
</head>
<body >
<?php include "includes/header.php" ?>
<br>
<?php
  $amigo=$_GET['amigo'];
  include_once 'conexion/conexion.php';
    $select_buscar=$con->prepare("
      SELECT * FROM PERSONA WHERE Usuario= :campo;"
    );
    $select_buscar->execute(array(':campo' =>"".$amigo.""
    ));
    $resultado=$select_buscar->fetchAll();
  ?>
      <?php foreach($resultado as $fila): 
        $login = $fila["Usuario"];
        $login2 = $fila["Nombre"];?>    
   <?php endforeach?>
   <div id="perfil_amigo">
<div id="divamigo">
    <a class="desplega_iconos" id="mostraricon" href="#" style="text-decoration: none;"  ><img class="eventoamigo" onerror="this.onerror=null;this.src='imagen/sin_foto.jpg';" src="data:image/jpg_;base64,<?php echo base64_encode($fila['Imagen_Perfil']);?>" alt="" ></a>
  </div>
  <div id="icono_mensajeria">
    <form action="modelDAO/agregar_amigo.php" name="tuformulario"  >
      <input type="hidden" name="variable1" value="<?php echo $amigo ?>" />
      <button type=button onclick="pregunta()" style="visibility: hidden; padding-top: 6%; margin-left: 7%;"><a href="#" style="text-decoration: none;"><i class="fa fa-thumbs-o-up" id="icon2"></i></a></button>   
  </form><br>
    <a href="#" id="abrir_modal" style="text-decoration: none;"><i class="fa fa-paper-plane" id="icon3"></i></a><br>
    <form action="modelDAO/dejar_amigo.php" name="tuformulario2">
      <input type="hidden" name="variable1" value="<?php echo $amigo ?>" />
    <button type=button onclick="pregunta2()" style="visibility: hidden; padding-top: 10%; margin-left: 12%;">
    <a href="#" style="text-decoration: none;"><i class="fa fa-ban" id="icon4" ></i></a><br></button>
    </form>
      <br>
    <a href="#" style="text-decoration: none;"><i class="fa fa-bomb" id="icon5" ></i></a><br>
  </div>
  <div id="info_amigo">
    <a href="panel.php" style="text-decoration: none;"><i class="fa fa-arrow-circle-left" aria-hidden="true" style="float: right; font-size: 3em; margin-right: 2%;"></i></a>
  <br>
    <h1 id="nombre_amigo"><?php echo $fila['Nombre'];?></h1>
<h2 id="usuario_amigo"><?php echo $fila['Usuario'];?></h2>
<h3 id="email_amigo"><?php echo $fila['Email'];?></h3>
<?php
$contador="";
  $select_buscar=$con->prepare('
            SELECT count(*) as cantidad FROM seguidor where Usuario_Seg LIKE :campo and Id_Estado=1;'
        );
        $select_buscar->execute(array(
            ':campo' =>"".$amigo.""
        ));
        $resultado=$select_buscar->fetchAll();
        foreach($resultado as $fila):     
      $contador= $fila['cantidad'];        
        ?>
      <?php
    endforeach
    ?>
<h4 id="seguidores_amigo">Seguidores: <?php echo $contador; ?> </h4><br> 
<?php
$contador="";
  $select_buscar=$con->prepare('
            SELECT count("Imagen") as cantidad FROM imagen where Usuario LIKE :campo;'
        );
        $select_buscar->execute(array(
            ':campo' =>"".$amigo.""
        ));
        $resultado=$select_buscar->fetchAll();
        foreach($resultado as $fila):      
      $contador= $fila['cantidad'];        
        ?>
      <?php
    endforeach
    ?>
    <h4 id="cantidad_fotos">fotos: <?php echo $contador; ?></h4>
</div>
  </div>
           <br>
      <div id="listado">
    <h4>Imagenes del Usuario: <?php echo $amigo ?></h4>
  </div><br>
  <div class="grid-gallery">
    <?php
    include("conexion/conexion.php");
try {
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}
$buscar_text=$_SESSION["usuario"];
        $select_buscar=$con->prepare('
            SELECT * FROM imagen where Usuario LIKE :campo;'
        );
        $select_buscar->execute(array(
            ':campo' =>"".$amigo.""
        ));
        $resultado=$select_buscar->fetchAll();
      foreach($resultado as $fila):
      ?>   
        <a class="grid-gallery__item" href="" style="text-decoration: none; ">
            <img id="foto" class="grid-gallery__image" src="data:image/jpg_;base64,<?php echo base64_encode($fila['Imagen']); ?>" width="200px" height="200px" >
        </a>        
      <?php
    endforeach
    ?>        
    </div>
</div>
    <footer class = "footer">
        <div  class = "container">
            <p  class = "text-muted"> Copyright © Nelson Amaya 2020 </p>
        </div>
    </footer>
    <div class="modal">
    	<div class="bodyModal">
    		<form action="modelDAO/mensaje_amigo.php" name="form_add_product" id="" >
          <a href="#" class="btn_ok closeModal" onclick="closeModal();"><i class="fa fa-times" style="color: red; font-size: 2em; float: right; padding: 10px;"></i></a><br>
    			<input type="hidden" name="variable1" value="<?php echo $amigo ?>"/>
          <h2 style="float: left;">Mensaje:</i></h2><br>
          <textarea name="cuerpo_mensaje" id="cuerpo_mensaje" autofocus style="width: 90%; height: 120px;" required=""></textarea><br>    			
    			<button type=button onclick="closeModal2();" class="btn btn-success">Enviar</button><br>    			
    		</form>
    	</div>
    </div>
<script src="javaScript/perfil_amigo.js"></script>
</body>
</html>