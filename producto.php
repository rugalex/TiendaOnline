<?php include "php/cabecera.inc" ?>
<?php include "php/config.inc" ?>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM productos WHERE id=".$_GET['id']." LIMIT 1";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
	echo "<article>";
	echo "<a href='producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."</h3></a>";
	echo "<p>".$fila['descripcion']."</p>";
	echo "<p>Precio: ".$fila['precio']." $</p>";
	$peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto = ".$fila['id']."";
	$resultado2 = mysqli_query($conexion, $peticion2);
	while($fila2 = mysqli_fetch_array($resultado2)) {
		echo "<img src='photo/".$fila2['imagen']."' width=100px>";
	}
	echo "<br>";
	echo "<a href='producto.php?id=".$fila['id']."'><button>Más información</button></a>";
	echo "<button>Comprar ahora</button>";
	echo "</article>";
} 
mysqli_close($conexion);
?>

<?php include "php/piedepagina.inc" ?>
