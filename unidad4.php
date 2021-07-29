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
		<h2>Im&aacutegenes con PHP</h2>
		<?php
		// Código que crea el thumbnail en la carpeta "thumbnails"
		$ruta = "imagenesUnidad4/buckethead.jpg";
		$base = imagecreatefromjpeg($ruta);
		// Tomamos ancho y alto de la imagen original
		$imgAncho = imagesx($base);
		$imgAlto = imagesy($base);
		// Imagen final tres veces menor a la original
		$ancho = $imgAncho/3;
		$alto = $imgAlto/3;
		$imgNueva = imagecreate($ancho, $alto);
		imagecopyresized($imgNueva, $base, 0, 0, 0, 0, $ancho, $alto, $imgAncho, $imgAlto);
		imagegif($imgNueva, "thumbnails/new_buckethead.jpg");
		echo "<p>Thumbnail 1</p>";
		?>
		<a href="https://www.youtube.com/watch?v=ys8--1C3aCM" target="_blank"><img src="thumbnails/new_buckethead.jpg" title="¡Hac&eacute click!"></a>
		<p>Marca de agua</p>
		<img src="water_mark.php">

	</section>
	<aside>
    	
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oacuten en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>