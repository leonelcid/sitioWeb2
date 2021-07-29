<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
<div class="container">
	<header>
		<h1>Programaci&oacuten en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>

	</header>
	<section>
		<h2>Listado de contenido</h2>
		<nav>
			<ul>
				<li><a href="unidad7.php">Volver</a></li>
			</ul>
		</nav>
		<?php

			include('clases/basededatos.php'); 
			include('clases/constantes.php');
			include('clases/producto.php');
			include('clases/carrito.php');

			$producto = new Producto();
			
			$base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);
			$carrito = new Carrito($base);

			$mostrar_prod = $carrito->seleccionarProductos();

		?>
		<table>
			<tr>
				<td>C&oacutedigo</td>
				<td>Producto</td>
				<td>Descripci&oacuten</td>
				<td>Precio</td>
				<td colspan="2">Administrador</td>
			</tr>

			<?php
				for($i = 0; $i < count($mostrar_prod); $i++){
			?>
			<tr>
				<td> <?php echo $mostrar_prod[$i]['codigo']; ?> </td>
				<td> <?php echo $mostrar_prod[$i]['producto']; ?> </td>
				<td> <?php echo $mostrar_prod[$i]['descripcion']; ?> </td>
				<td> <?php echo $mostrar_prod[$i]['precio']; ?> </td>
				<td><a href="modificar.php?id = <?php echo $mostrar_prod[$i]['codigo']; ?> "><button type="button">Modificar</button></a></td>
				<td><a href="eliminar.php?borrar = <?php echo $mostrar_prod[$i]['codigo']; ?>"><button type="button">Eliminar</button></a></td>
			</tr>
			<?php } ?>
		</table>
	</section>
	<aside>
    	
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oacuten en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
</body>
</html>