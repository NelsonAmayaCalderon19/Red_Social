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
<link rel="stylesheet" type="text/css" href="css/styles_mi_perfil.css">
</head>
<body>
<?php include "includes/header.php" ?>
      <div id="contenedor">
	<a href="principal.php" style="text-decoration: none;"><i class="fa fa-arrow-circle-left" aria-hidden="true"id="volver"></i></a>
	<br>
    <form action="modelDAO/Cargar_Imagen.php" method="post" enctype="multipart/form-data">
	<div id="div_file">
        <label for="file" class="input-file__btn" id="cargar">Cargar Imagen</label>
            <label for="" class="input-file__field"></label>
            <input type="file" id="file" class="input-file__input" name="imagen" accept="image/jpg,
            image/png,image/jpeg">           
            <input type="submit" name="Aceptar" value="Registrar" class="btn-Agregar btn-primary" id="btn-Agregar" disabled="disabled" >
  </div></form><br>
  <div id="listado">
  	<h4>Listado de Imagenes de <?php echo $_SESSION["usuario"] ?></h4>
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
            ':campo' =>"%".$buscar_text."%"
        ));
        $resultado=$select_buscar->fetchAll();
			foreach($resultado as $fila):
			?>			
		<input type="hidden" name="variable1" value="<?php echo $fila['Usuario']; ?>" />
		<input type="hidden" name="variable2" value="<?php echo $fila['Fecha_Hora']; ?>" />
				<a class="grid-gallery__item" href="#" style="text-decoration: none; ">
            <img id="foto" class="grid-gallery__image" src="data:image/jpg_;base64,<?php echo base64_encode($fila['Imagen']); ?>" width="200px" height="200px" >
        </a>				
			<?php
		endforeach
		?>        
    </div>
</div>           
             <?php include "includes/footer.php" ?> 
    <script src="javaScript/mi_perfil.js"></script>
    <script src="javaScript/jquery-3.3.1.min.js"></script>
    <script src="javaScript/scripts.js"></script>
</body>
</html>