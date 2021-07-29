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
		<h2>Agenda de clases</h2>

		<div class="muestra_clases">
			<?php
				// Archivo de conexión a la BD
				include('conexion.php');
				// Mostramos desde la tabla clases
				$consulta = mysqli_query($datos_bd, "SELECT * FROM clases");
				// Array asociativo
				while($listar_info = mysqli_fetch_assoc($consulta)) {
			?>
					<p>Unidad: <?php echo $listar_info['unidad']; ?></p>
					<p>Fecha: <?php echo $listar_info['fecha']; ?></p>
					<hr>
			<?php 
				}
			//header("Location: unidad1.php");	
			?>
		</div>

	</section>
	<aside>
		<form method="POST" action="insertar_clases.php" class="estilo_formulario">
			<input type="text" name="unidad" placeholder="Unidad" required maxlength="30"><br>
			<input type="date" name="fecha" placeholder="Fecha" required><br>
			<input type="submit" value="Enviar datos">
		</form>    
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oacuten en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>