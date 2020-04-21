<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style_header.css">
</head>
<header class="encabezado">
	<div id="divimagen">
		<a href="configuracion.php"><img class="evento" onerror="this.onerror=null;this.src='imagen/sin_foto.jpg';" src="data:image/jpg_;base64,<?php echo base64_encode($fila['Imagen_Perfil']);?>" alt=""></a>
	</div>
	<div id="divuser">
		<h3><?php echo $login2?></h3>
	</div>
	<div id="desplegable">
	<div class="dropdown" style="margin-right: 50px" id="desplegable2">
                    <h2><button style="border: none" class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 80px">
         <?php echo $_SESSION["usuario"] ?>
                    </button>
        <div class="dropdown-menu text-center" style="margin-right: 83px ">
            <!--<a class="dropdown-item" href="#" style="margin-right: 300px ">
                <img class="foto" src="" alt="80" width="80"/>
            </a>-->
           <form action="" method="POST"  > 
          <!--<a class="dropdown-item" href="#">${usuario.getCedula()}</a>
          <a class="dropdown-item" href="#">${usuario.getEmail()}</a>-->
          <a class="dropdown-item"   href="mi_perfil.php" id="perfil"><h5 class="border"><i class="fa fa-user-circle-o" aria-hidden="true" id="icon"></i>Perfil (<?php echo $_SESSION["usuario"] ?>)</h5></a>
          <a class="dropdown-item"  href="siguiendo.php"><h5 class="border"><i class="fa fa-users" aria-hidden="true" id="icon"></i>Siguiendo</h5></a>
          <a class="dropdown-item"  href="seguidores.php"><h5 class="border"><i class="fa fa-users" aria-hidden="true" id="icon"></i>Seguidores</h5></a>
          <div class="dropdown-divider"></div>         
          <a class="dropdown-item"  href="mensajeria.php"><h5 class="border"><i class="fa fa-envelope" aria-hidden="true" id="icon"></i>Mensajeria</h5></a>
          <div class="dropdown-divider"></div>         
          <a class="dropdown-item"  href="configuracion.php"><h5 class="border"><i class="fa fa-cogs" aria-hidden="true" id="icon"></i>Configuracion</h5></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="principal.php"><h5 class="border"><i class="fa fa-check" aria-hidden="true" id="icon"></i>Publico</h5></a>
           </form>
          <div class="dropdown-divider"></div>
          <form action="Controlador/Cerrar_Sesion.php" method="POST">
              <button name="accion" value="Salir" class="dropdown-item" href="#"><h5 class="cerrar" id="close"><i class="fa fa-sign-out" aria-hidden="true" id="icon"></i>Cerrar Sesión</h5></button>
          </form>
        </div></h2>         
    </div>
    </div>
            </header>
            </html>