<?php include "php/cabecera.inc" ?>
<?php include "php/config.inc" ?>
<?php

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM productos WHERE existencias > 0";
$resultado = mysqli_query($conexion, $peticion);
echo "<br>";
echo '<div class="row" id="bg_m">';
echo "<br>";

while($fila = mysqli_fetch_array($resultado)) {
	
	
    echo '<div class="col-lg-4 col-sm-6 col-md-4">';
    echo '<div class="thumbnail" id="bg_w">';
	echo "<article>";
	echo "<br>";

	$peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto = ".$fila['id']." LIMIT 1";
	$resultado2 = mysqli_query($conexion, $peticion2);
	while($fila2 = mysqli_fetch_array($resultado2)) {
		echo "<img src='images/".$fila2['imagen']."' width=100px>";
	}
	
	echo "<a href='producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."</h3></a>";
	echo "<p>".$fila['descripcion']."</p>";
	echo "<p><b>Precio: ".$fila['precio']." $</b></p>";
	
	echo "<br>";

	echo "<a href='producto.php?id=".$fila['id']."'>Más información</a></br>";
	echo "<button value='".$fila['id']."' class='botoncompra btn btn-primary' type='button'>Comprar ahora</button>";

	echo "</article>";

	echo "</div>";
	echo "</div>";

	
} 

echo "</div>";
mysqli_close($conexion);
?>

<?php include "php/piedepagina.inc" ?>
