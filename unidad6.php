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
		<h2>Usuarios</h2>
	<?php
		include("usuarios.php");
		#include("caract_usuarios.php");
		if($_POST){
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$edad = $_POST['edad'];
		
			# Instanciamos la clase y le damos valores por argumentos al constructor
			$usuario = new Usuario($nombre, $apellido, $edad);
			echo $usuario->imprime_caracteristicas();
		}	
	?>

	</section>
	<aside>
    	<!--Formulario-->
   		<form method="POST" action="unidad6.php" class="estilo_formulario">
			<input type="text" name="nombre" placeholder="Nombre" required /><br>
			<input type="text" name="apellido" placeholder="Apellido" required /><br>
			<input type="number" name="edad" placeholder="Edad" required maxlength="2" /><br>
			<input type="submit" value="Enviar" />
		</form>	
  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oan en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>