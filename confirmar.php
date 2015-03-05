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
<form class="navbar-form navbar-right" action="/GitHub/TiendaOnline/php/logcliente.php" method="POST">
	¿Ya eres usuario?<br>
  <div class="form-group form-group-sm">
    <input name="usuario" id="input" class="form-control" placeholder="usuario" required="" autofocus="" type="text" aria-describedby="sizing-addon3">
    <input name="contrasena" id="inputPassword" class="form-control" placeholder="contraseña" required="" type="password" aria-describedby="sizing-addon3">
  </div>
  <button class="btn btn-sm btn-primary" type="submit">Iniciar sesión</button><br>
    ¿Eres nuevo usuario?
<a href="php/clientenuevo.php"><font size="2px"> Click aquí para crear una cuenta</font></a> 
  </form>

</br>
<h4>Por favor inicia sesión primero!</h4>
</br>
</body>
</html>
<?php include "php/piedepagina.inc" ?>
