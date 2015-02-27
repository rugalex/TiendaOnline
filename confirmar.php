<?php include "php/cabecera.inc" ?>
<br>¿Ya eres usuario?<br>
<form action="php/logcliente.php" method="POST">

	<input type="text" name="usuario" autocomplete="off" placeholder="Introduce tu nombre de usuario">
	<input type="password" name="contrasena" autocomplete="off"  placeholder="Introduce tu contraseña">
	<input type="submit">

</form>
¿Eres nuevo usuario?
<a href="php/clientenuevo.php"><font size="2px"> Click aquí para crear una cuenta</font></a> 
<br>

<?php include "php/piedepagina.inc" ?>
