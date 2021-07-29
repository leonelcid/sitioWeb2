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
		<h2>Mi Carrito</h2>
		<nav>
			<ul>
				<li><a href="unidad7.php">Volver</a></li>
			</ul>
		</nav>
		<?php
			include('includes.php'); 
			// Tiene que devolver solo UN producto cargado
			$mostrar_prod_comprados = $carrito->listarProductosComprados();

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
				for($i = 0; $i < count($mostrar_prod_comprados); $i++){
			?>
			<tr>
				<td> <?php echo $mostrar_prod_comprados[$i]['codigo']; ?> </td>
				<td> <?php echo $mostrar_prod_comprados[$i]['producto']; ?> </td>
				<td> <?php echo $mostrar_prod_comprados[$i]['descripcion']; ?> </td>
				<td> <?php echo $mostrar_prod_comprados[$i]['precio']; ?> </td>
				<td>
					<form action="eliminar.php" class="estilo_formulario" method="post" >
   						<input type="hidden" name="codigo" value="<?php echo $mostrar_prod_comprados[$i]['codigo']; ?>"/>
						<input type="submit" value="Eliminar"/>
					</form>
				</td>
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