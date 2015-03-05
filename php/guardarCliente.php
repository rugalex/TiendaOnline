<?php include "cabecera.inc" ?>
<?php include "config.inc" ?>
<?php
		$conexion=mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
		if(isset($_POST['enviar'])){
	include "config.inc";	
	$enlace=mysqli_connect($servidor,$usuario,$contrasena,$basededatos) or die(mysqli_error()); 
	$consulta="select * from clientes where usuario like '%".$_POST['user']."%'";
	$resultado=mysqli_query($enlace,$consulta) or die (mysqli_error());
	 if(mysqli_num_rows($resultado)){
		echo '<center><br><br><label style="color: red;">El usuario ya esta registrado</label><br></center>';
		echo '<center><a  href="clientenuevo.php">Volver</a></center>';				 		
	}else{		
		$peticion="insert into clientes values (null,'".$_POST['nombre']."','".$_POST['apellido'].
		"','".$_POST['mail']."','".$_POST['user']."','".$_POST['pass']."','".$_POST['tel']."','".$_POST['movil']."','".$_POST['direc']."','".$_POST['ciu']."')";
		$resultado2=mysqli_query($conexion,$peticion);
		echo "<html><br><br><center><font size=5><b>Usuario creado con exito</b></font><center></html>";
		echo '<center><a  href="../confirmar.php">Volver</a></center>';		
		mysqli_close($conexion);
	}
}		include "piedepagina.inc" 				  
?>