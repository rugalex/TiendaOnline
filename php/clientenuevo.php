<?php 
include "cabecera.inc"; 

if(isset($_POST['enviar'])){
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['mail'];
$pass=$_POST['pass'];
$user=$_POST['user'];
$tel=$_POST['tel'];
$movil=$_POST['movil'];
$direc=$_POST['direc'];
$ciu=$_POST['ciu'];
$pattern="/^([0-9]*)$/";
$pattern_2="/^([a-zA-Z]*)$/";
$pattern_3="/^([0-9a-zA-Z]*)$/";
$pattern_4="/^([\w]*)$/";

if(!filter_var($tel,FILTER_VALIDATE_INT)){
	echo '<span class="tel" style="color: red;">El telefono no es valido</span>';
	return false;
	}else{
	if(strlen($tel)<7){
	echo '<span class="tel" style="color: red;">El telefono debe tener 7 caracteres</span>';
	return false;		
	}
}
	
	if(!preg_match($pattern, trim($movil))){
	echo '<span class="movil" style="color: red;">El movil no es valido</span>';
	return false;
	}else{
	if(strlen(trim($movil))<10){
	echo '<span class="movil" style="color: red;">El movil debe tener 10 caracteres</span>';
	return false;		
	}
}	
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo '<span class="mail" style="color: red;">El e-mail no es valido</span>';
		return false;
	}
	
	if(!preg_match($pattern_2, $nombre)){
	echo '<span class="nombre" style="color: red;">Ingrese un nombre válido</span>';
	return false;
	}else{
		if(strlen($nombre)>30){
			echo '<span class="tel" style="color: red;">Nombre demasiado largo</span>';
			return false;
		}
	}
	
	if(!preg_match($pattern_2, $apellido)){
	echo '<span class="apell" style="color: red;">Ingrese un apellido válido</span>';
	return false;
	}else{
		if(strlen($apellido)>30){
			echo '<span class="apell" style="color: red;">Apellido demasiado largo</span>';
			return false;
		}
	}
	
	if(!preg_match($pattern_3, $pass)){
		echo '<span class="pass" style="color: red;">Ingrese contraseña válida</span>';
		return false;
	}else{
		if(strlen($pass)<6){
			echo '<span class="pass" style="color: red;">Contraseña demasiado pequeña</span>';
			return false;
		}
	}
	
	if(!preg_match($pattern_4, $user)){
		echo '<span class="user" style="color: red;">Ingrese contraseña válida</span>';
		return false;
	}else{
		if(strlen($user)>15){
			echo '<span class="user" style="color: red;">Usuario demasiado largo</span>';
			return false;
		}
	}	
	
	if(!preg_match($pattern_3, $direc)){
	echo '<span class="direc" style="color: red;">Ingrese una direccion válida</span>';
	return false;
	}else{
		if(strlen($direc)>150){
			echo '<span class="direc" style="color: red;">Campo demasiado largo</span>';
			return false;
		}
	}
	
	if(!preg_match($pattern_2, $ciu)){
	echo '<span class="ciu" style="color: red;">Ingrese una ciudad válida</span>';
	return false;
	}else{
		if(strlen($ciu)>30){
			echo '<span class="ciu" style="color: red;">campo demasiado largo</span>';
			return false;
		}
	}	
	return true;
	}
?>
<html>

<<<<<<< HEAD
	<head>
		<title>Tienda</title>
		<link rel=Stylesheet href="../css/movil.css" media='screen and (min-width: 1px) and (max-width: 800px)'>
		<link rel=Stylesheet href="../css/pcmac.css" media='screen and (min-width: 801px) and (max-width: 4000px)'>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/codigo.js"></script>								
	</head>
<body>

<form action="guardarCliente.php" method="post" id="datos" class="navbar-form navbar-right" role="submit">
<br>
 <div class="form-group form-group-sm">
<input class="form-control" type="text" name="nombre" placeholder="Nombres" required="" autocomplete="off" /><br/>
<input class="form-control" type="text" name="apellido" placeholder="Apellidos" required="" autocomplete="off" /><br/>
<input id="inputEmail" class="form-control" placeholder="e-mail" required="" autofocus="" autocomplete="off" type="email" name="mail" aria-describedby="sizing-addon3"><br/>
<input id="inputPassword" class="form-control" placeholder="contraseña" required="" type="password" name="pass" aria-describedby="sizing-addon3"><br/>
<input class="form-control" type="text" name="user" placeholder="Usuario" required="" id="user" autocomplete="off" /> <br/>
<input class="form-control" type="text" name="tel" placeholder="Telefono" required="" autocomplete="off" /><?php echo '<span class="tel"></span>'; ?><br/>
<input class="form-control" type="text" name="movil" placeholder="Movil" required="" autocomplete="off" /><br/>
<input class="form-control" type="text" name="direc" placeholder="Direccion" required="" autocomplete="off" /><br/>
<input class="form-control" type="text" name="ciu" placeholder="Ciudad" required="" autocomplete="off" /><br/>

<input class="btn btn-sm btn-primary" type="submit" name="enviar" value="enviar"/>
<input class="btn btn-default btn-sm btn-right" type="reset" value="Cancelar"/>
  </div> 
  </form>
</body>
</html>


>>>>>>> e70bc8053e1ffb1d99a63e8f33b874d8ba18129e
<?php include "piedepagina.inc" ?>