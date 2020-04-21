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
<link rel="stylesheet" type="text/css" href="css/style_mensajeria.css">
 <?php
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
</head>
<body>
<?php include "includes/header.php" ?><br><h1 style="color: red">Mensajes Recibidos</h1>
<a href="principal.php" style="text-decoration: none;"><i class="fa fa-arrow-circle-left" aria-hidden="true" id="volver"></i></a>
  <br>
<?php
$user_amigo="";
$contenido="";
$fecha="";
$contador="";
  $select_buscar=$con->prepare('
            SELECT *,count(if(bm.Estado =2, 1, NULL)) as total FROM bandeja_mensaje as bm, persona as p where p.Usuario=bm.Usuario and bm.Usuario_Mensaje LIKE :campo group by bm.Usuario order by count(if(bm.Estado =2, 1, NULL)) desc;'
        );
        $select_buscar->execute(array(
            ':campo' =>"".$_SESSION["usuario"].""
        ));
        $resultado=$select_buscar->fetchAll();
        foreach($resultado as $fila): 
          $contador="";
        $user_amigo= $fila['Usuario'];
        $contenido= $fila['Contenido']; 
        $fecha= $fila['Fecha_Hora'];        
        ?>
  <div id="mensaje">
<div id="titulo">
       <h4 style="color: white;">Usuario: <?php echo $user_amigo; ?></h4>     
    </div>
    <div id="contenido">
      <form action="mensaje.php" method="POST">
        <input type="hidden" name="user_amig" id="user_amig"  value="<?php echo $fila['Usuario'] ?>">
      <a class="grid-gallery__item" href="#" style="text-decoration: none; ">
            <img id="foto" class="grid-gallery__image" src="data:image/jpg_;base64,<?php echo base64_encode($fila['Imagen_Perfil']); ?>" width="100px" height="100px" ></a><br>
            <h3> Mensajes sin Leer:</h3><h4 id="total"> <?php echo $fila['total']?></h4>
         <br>         
        <input type="submit" class="btn btn-success" name="boton" value="Ver Mensajes">
        </form>
    </div>
  </div>
  <?php
    endforeach    
    ?>
     <?php include "includes/footer.php" ?> 
</body>
</html>