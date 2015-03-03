<?php include "cabecera.inc" ?>
<html>
	
<form action="/GitHub/TiendaOnline/guardarCliente.php" method="post" id="datos" class="navbar-form" role="submit">
  <div class="form-group form-group-sm">
  
<input class="form-control" type="text" name="nombre" placeholder="Nombres" autocomplete="off" /><br/>
<input class="form-control" type="text" name="apellido" placeholder="Apellidos" autocomplete="off" /><br/>
<input class="form-control" type="text" name="mail" placeholder="E-mail" autocomplete="off" /> <br/>
<input class="form-control" type="text" name="user" placeholder="Usuario" id="user" autocomplete="off" /> <br/>
<input class="form-control" type="password" name="pass" placeholder="Contraseña" autocomplete="off" /> <br/>
<input class="form-control" type="text" name="tel" placeholder="Telefono" autocomplete="off" /><br/>
<input class="form-control" type="text" name="movil" placeholder="Movil" autocomplete="off" /><br/>
<input class="form-control" type="text" name="direc" placeholder="Direccion" autocomplete="off" /><br/>
<input class="form-control" type="text" name="ciu" placeholder="Ciudad" autocomplete="off" /><br/>
<input class="form-control" type="text" name="pais" placeholder="Pais" autocomplete="off" /><br/>

<input type="button" class="btn btn-default btn-sm" name="enviar" type="submit" value="Enviar"/>
<input class="btn btn-default btn-sm btn-right" type="reset" value="Cancelar"/>
  </div>
 
  </form>




<?php include "piedepagina.inc" ?>