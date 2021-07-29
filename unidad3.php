<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <style type="text/css">
  	.datos_formulario{
  		background-color: #cccccc;
  		border: 1px solid #000000;
  		padding: 10px;
  		margin: 10px;
  		width: 300px;
  		float: left;   
	}
  </style>
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
		<h2>Comentarios</h2>
		<div class="datos_formulario">
		<?php include ("comentarios.php"); ?>
		<?php 
			$archivo_lectura = fopen('comentarios.txt', 'r');
			fpassthru($archivo_lectura);
		?>
		</div>
	</section>
	<aside>
		<div>
			<form method="POST" action="unidad3.php" class="estilo_formulario">
				<input type="text" name="nya" placeholder="Nombre y Apellido" required><br>
				<input type="text" name="mail" placeholder="Mail" required><br>
				<input type="text" name="comentario" placeholder="Comentario" required><br>
				
				<input type="submit" value="Enviar">

			</form>
		</div>
	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oacuten en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>