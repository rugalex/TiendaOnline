<?php
    include "cabecera.inc";	
?>
<form action="guardarCliente.php" method="post">  
<br>
<label>Nombre:	</label><input type="text" name="nombre" autocomplete="off" /><br/><br/> 
<label>Apellidos:</label><input type="text" name="apellido" autocomplete="off" /><br/><br/>
<label>Email:</label><input type="text" name="mail" autocomplete="off" /> <br/> <br/>
<label>Usuario:	</label><input type="text" name="user" id="user" autocomplete="off" /> <br/><br/>
<label>Contrasena:</label><input type="password" name="pass" autocomplete="off" /> <br/><br/>
<label>Telefono:</label><input type="text" name="tel" autocomplete="off" /><br/><br/>
<label>Movil:	</label><input type="text" name="movil" autocomplete="off" /><br/><br/>
<label>Fax:	</label><input type="text" name="fax" autocomplete="off" /><br/><br/>
<label>Direccion:</label><input type="text" name="direc" autocomplete="off" /><br/><br/>
<label>Codigo postal:</label><input type="text" name="codp" autocomplete="off" /><br/><br/>
<label>Ciudad:</label><input type="text" name="ciu" autocomplete="off" /><br/><br/>
<label>Pais:</label><input type="text" name="pais" autocomplete="off" /><br/><br/>
<input type="submit"/>
<br/>
</form>
<?php include "piedepagina.inc" ?>