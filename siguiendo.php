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
<script type="text/javascript">

</script> 
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
	</script>
<link rel="stylesheet" type="text/css" href="css/styles_siguiendo.css">
</head>
<body onload="busqueda();">
<?php include "includes/header.php" ?>
           <a href="principal.php" style="text-decoration: none;" id="volver"><i class="fa fa-arrow-circle-left" aria-hidden="true" id="vovler"></i></a>
            <div class="input-group mb-3">
  <div class="input-group-prepend" style="padding-left: 5%;">
    <span class="input-group-text" id="basic-addon1" style="border-radius: 10px; margin-right: 3px;"><i class="fa fa-search" aria-hidden="true" style="float: right; font-size: 1em;"></i></span>
  </div>
  <input id="FiltrarContenido" type="text"  placeholder="Filtrar Usuarios" aria-label="Alumno"  style="padding-left: 1%; width: 20%; border-radius: 20px; border-color: #fff solid 4px;">
</div>
<h1 id="siguiendo">Siguiendo</h1>
	    <table class="table ">
        <tbody class="BusquedaRapida">
        	<div id="contenedor">
        	<div class="grid-gallery">
<?php
include_once 'conexion/conection.php';
$con = conexion();
$consulta = "SELECT  p.Imagen_Perfil, p.Usuario FROM seguidor as s, persona as p where p.Usuario=s.Usuario_Seg and s.Id_Estado='1' and s.Usuario='".$_SESSION["usuario"]."'";
$resultado = mysqli_query($con , $consulta);
$contador=0;
while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
<tr>
  <td style="visibility: hidden; width: 0px;"><?php echo $misdatos["Usuario"]; ?></td>
  <td><a class="grid-gallery__item" product="<?php echo $misdatos["Usuario"]; ?>" href="perfil_amigo.php?amigo=<?php echo $misdatos['Usuario']; ?>" style="text-decoration: none; ">
            <img id="foto" class="grid-gallery__image" src="data:image/jpg_;base64,<?php echo base64_encode($misdatos['Imagen_Perfil']); ?>" onerror="this.onerror=null;this.src='imagen/sin_foto.jpg';" width="200px" height="200px" >
        </a></td>
  </tr>          
<?php }?>          
</div>
</div>
</tbody>
      </table>		
     <?php include "includes/footer.php" ?> 
    <div class="modal">
    	<div class="bodyModal">
    		<form action="" name="form_add_product" id="">
    			<h1><i class="fa fa-check">Agregar</i></h1><br>
    			<input type="text" name="" id="titulito"><br>
    			<input type="text" name=""><br>
    			<button type="submit">Agregar</button><br>
    			<a href="#" class="btn_ok closeModal" onclick="closeModal();">Cerrar</a>
    		</form>
    	</div>
    </div>
<script src="javaScript/siguiendo.js"></script>
</body>
</html>