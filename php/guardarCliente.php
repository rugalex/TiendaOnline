<?php
    include "config.inc";	
	//$cont=0;
	$conexion=mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
	$peticion1="select * from clientes where usuario = ".$_POST['user']."";
	
	$resultado1=mysqli_query($conexion,$peticion1);
	while($fila=@mysqli_fetch_array($resultado1)){
		$cont++;
		$usr=$_GET['user'];
	}	
	if(isset($usr)==$fila['usuario']){
		echo "<html><center><br><br><font size=5><b>El usuario ya existe</b></font></center></html>";
		echo '<center><a  href="../confirmar.php">Volver</a>/<center>';		
		}else{
		$peticion="insert into clientes values (null,'".$_POST['nombre']."','".$_POST['apellido'].
		"','".$_POST['mail']."','".$_POST['user']."','".$_POST['pass']."',NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
		$resultado2=mysqli_query($conexion,$peticion);
		echo "<html><br><br><center><font size=5><b>Usuario creado con exito</b></font><center></html>";
		echo '<center><a  href="../confirmar.php">Volver</a></center>';		
		mysqli_close($conexion);
		}					  
?>

