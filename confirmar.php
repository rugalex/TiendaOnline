<?php include "php/cabecera.inc" ?>
<html>
	<head>
		<title>Rissoto</title>
	    <link rel=Stylesheet href="/GitHub/TiendaOnline/css/estilos.css" >
	    <link href="/GitHub/TiendaOnline/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="/GitHub/TiendaOnline/js/jquery.js"></script>
		<script type="text/javascript" src="/GitHub/TiendaOnline/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/GitHub/TiendaOnline/js/codigo.js"></script>
	</head>
<body>
<br>¿Ya eres usuario?<br>
<form action="php/logcliente.php" method="POST">

	<input type="text" name="usuario" autocomplete="off" placeholder="Introduce tu nombre de usuario">
	<input type="password" name="contrasena" autocomplete="off"  placeholder="Introduce tu contraseña">
	<input type="submit">

</form>
¿Eres nuevo usuario?
<a href="php/clientenuevo.php"><font size="2px"> Click aquí para crear una cuenta</font></a> 
<br>
</body>
</html>
<?php include "php/piedepagina.inc" ?>
