<?php 

	require_once "../conexion/conection.php";
	$conexion=conexion();

		$usuario=$_POST['usuario'];
		$nombre=$_POST['nombre'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		if(buscaRepetido($usuario,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into persona (Usuario,Nombre,Email,Fecha_Registro)
				values ('$usuario','$nombre','$email',NOW())";
			echo $result=mysqli_query($conexion,$sql);
			$sql2="INSERT into usuario (Usuario,Password)
				values ('$usuario','$password')";
			$resultado=mysqli_query($conexion,$sql2);
		}


		function buscaRepetido($usuario,$conexion){
			$sql="SELECT * from usuario 
				where Usuario='$usuario'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){				
				return 1;
			}else{
				return 0;
			}
		
}
 ?>