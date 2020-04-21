<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
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
<link rel="stylesheet" type="text/css" href="css/styles_mensaje.css">
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
<?php include "includes/header.php" ?><br>
<?php
$user_amigo=$_POST['user_amig'];
?><h2 style="color: red">Ver Mensajes</h2>
<a href="mensajeria.php" style="text-decoration: none;"><i class="fa fa-arrow-circle-left" aria-hidden="true"  id="volver"></i></a>
  <br><br>
 <div id="mensaje">
<div id="titulo">
       <h4 style="color: white;">Usuario: <?php echo $user_amigo; ?></h4>   
    </div>
    <div id="contenido" >
     <?php
$contenido="";
$fecha="";
  $select_buscar=$con->prepare('
            SELECT * FROM bandeja_mensaje  where Usuario="'.$user_amigo.'" and Usuario_Mensaje LIKE :campo order by Fecha_Hora desc ;'
        ); 
        $select_buscar->execute(array(
            ':campo' =>"".$_SESSION["usuario"].""
        ));
        $resultado=$select_buscar->fetchAll();
        foreach($resultado as $fila): 
        $contenido= $fila['Contenido']; 
        $fecha= $fila['Fecha_Hora'];        
        ?>    
<label id="label" ><?php echo $contenido;?></label><br><i class="fa fa-clock-o" aria-hidden="true" id="reloj"></i><h3 id="fecha"><?php echo $fecha; ?></h3><br>   
    <?php
    endforeach    
    ?>
     </div>
  </div>
  <?php
  $query ='UPDATE bandeja_mensaje SET Estado=1 WHERE Usuario="'.$user_amigo.'" and Usuario_Mensaje="'.$_SESSION["usuario"].'"';
$resultado = $con->query($query);
?>
 <?php include "includes/footer.php" ?> 
</body>
</html>