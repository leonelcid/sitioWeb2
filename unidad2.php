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
		<h2>Eventos</h2>
		<div class="formulario_calculo">
			<hr>
			<?php include("calculo_fecha.php");?>
			<hr>
			
		</div>
	</section>
	<aside>
		<div>
			<form method="POST" action="unidad2.php" class="estilo_formulario">
				<input type="number" name="dia" placeholder="Día dd" required maxlength="2"><br>
				<input type="number" name="mes" placeholder="Mes mm" required maxlength="2"><br>
				<input type="number" name="anio" placeholder="Año aaaa" required maxlength="4"><br>
				
				<input type="submit" value="Calcular">
			</form>
		</div>	
    </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oacuten en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>