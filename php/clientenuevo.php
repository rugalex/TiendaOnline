<?php 
include "cabecera.inc"; 



?>
<html>
	<head>
		<title>Tienda</title>
		<link rel=Stylesheet href="../css/movil.css" media='screen and (min-width: 1px) and (max-width: 800px)'>
		<link rel=Stylesheet href="../css/pcmac.css" media='screen and (min-width: 801px) and (max-width: 4000px)'>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/codigo.js"></script>
	</head>
<body>
<form action="guardarCliente.php" method="post" id="datos">  
<br>
<label> Campo opcional(*)</label><br><br>
<label>Nombre: </label><br><input type="text" name="nombre" autocomplete="off" /><br/><br/>
<label>Apellidos: </label><br><input type="text" name="apellido" autocomplete="off" /><br/><br/>
<label>Email: </label><br><input type="text" name="mail" autocomplete="off"/> <br/> <br/>
<label>Usuario: </label><br><input type="text" name="user" id="user" autocomplete="off" /> <br/><br/>
<label>Contrasena: </label><br><input type="password" name="pass" autocomplete="off" /> <br/><br/>
<label>Telefono: </label><br><input type="text" name="tel" autocomplete="off" /><br/><br/>
<label>*Movil: </label><br><input type="text" name="movil" autocomplete="off" /><br/><br/>
<label>*Fax:	</label><br><input type="text" name="fax" autocomplete="off" /><br/><br/>
<label>Direccion: </label><br><input type="text" name="direc" autocomplete="off" /><br/><br/>
<label>Codigo postal: </label><br><input type="text" name="codp" autocomplete="off" /><br/><br/>
<label>Ciudad: </label><br><input type="text" name="ciu" autocomplete="off" /><br/><br/>
<label>Pais: </label><br><input type="text" name="pais" autocomplete="off" /><br/><br/>
<input name="enviar" type="submit"" value="Enviar"/>
<input type="reset" value="Cancelar"/>
</form>
<br/>
</body>
</html>
<?php include "piedepagina.inc" ?>