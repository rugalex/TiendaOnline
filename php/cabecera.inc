<?php
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador'] = 0;}
?>
<!doctype html>
<html lang="es">
	<head>
		<title>Rissoto</title>
	    <link rel=Stylesheet href="/GitHub/TiendaOnline/css/estilos.css" >
	    <link href="/GitHub/TiendaOnline/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="/GitHub/TiendaOnline/js/jquery.js"></script>
		<script type="text/javascript" src="/GitHub/TiendaOnline/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/GitHub/TiendaOnline/js/codigo.js"></script>
	</head>
	<body id="bg_y">

	<div class="row" >
<div class="col-md-2 col-lg-3 col-sm-1" ></div>
		<div id="bg_r" class="col-md-8 col-lg-6 col-sm-10"  >

			<header>

	<form class="navbar-form navbar-right" role="submit">
  <div class="form-group form-group-sm">
    <input id="inputEmail" class="form-control" placeholder="e-mail" required="" autofocus="" type="email" aria-describedby="sizing-addon3">
    <input id="inputPassword" class="form-control" placeholder="contraseña" required="" type="password" aria-describedby="sizing-addon3">
  </div>
  <button class="btn btn-sm btn-primary" type="submit">Iniciar sesión</button>
  </form>
 
	
				<a href="/GitHub/TiendaOnline/index.php"><h1>Rissoto</h1></a>
				<h2>Comidas tipicas y algo más!</h2>
			</header>
			<section>
			<div id="contienecarrito">
			<div id="carrito" style="background-color:#FFD574;color:black;">
			
			Carrito
			</div>
		
 <a href='php/destruir.php'> <button type="button" class="btn btn-danger">Vaciar carrito <span class="glyphicon glyphicon-trash" aria-hidden="true"><span></button></a>
 <a href='confirmar.php'> <button type="button" class="btn btn-success">Confirmar compra <span class="glyphicon glyphicon-ok" aria-hidden="true"><span></button></a>
</br>

			
		