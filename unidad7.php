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
		<h2>Compras</h2>
		<nav>
			<p><h3>Lista de productos</h3></p>
			<p>
			<?php
				echo "<a href='ver_carrito.php'><button type='button'>Mi Carrito</button></a>" ;
			?>
			</p>
		</nav>
	
	<?php
		include('includes.php'); 
		$mostrar_prod = $carrito->listarProductos();
	?>
	
	<table>
		<tr>
			<td>C&oacutedigo</td>
			<td>Producto</td>
			<td>Descripci&oacuten</td>
			<td>Precio</td>
			<td colspan="3">Administrador</td>
		</tr>

		<?php
			for($i = 0; $i < count($mostrar_prod); $i++){
		?>
		<tr>
			<td> <?php echo $mostrar_prod[$i]['codigo']; ?> </td>
			<td> <?php echo $mostrar_prod[$i]['producto']; ?> </td>
			<td> <?php echo $mostrar_prod[$i]['descripcion']; ?> </td>
			<td> <?php echo $mostrar_prod[$i]['precio']; ?> </td>

			<td>
				<form action="anadir_al_carrito.php" class="estilo_formulario" method="post" >
   					<input type="hidden" name="codigo" value="<?php echo $mostrar_prod[$i]['codigo']; ?>"/>
   					<input type="hidden" name="producto" value="<?php echo $mostrar_prod[$i]['producto']; ?>"/>
   					<input type="hidden" name="descripcion" value="<?php echo $mostrar_prod[$i]['descripcion']; ?>"/>
   					<input type="hidden" name="precio" value="<?php echo $mostrar_prod[$i]['precio']; ?>"/>
					<input type="submit" value="Comprar"/>
				</form>
			</td>
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