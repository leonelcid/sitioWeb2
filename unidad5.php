<?php 
session_start(); // Iniciamos la sesión
?>
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

<?php
include("botonera.php");
?>

</nav>
	</header>
<section>
	<h2>Consultas</h2>

</section>
<aside>
<?php

$numero1= rand(0,9);
$numero2= rand(0,9);
$numero3= rand(0,9);
$minus = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
$mayus = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$signos = array("!","#","$","%","&","=");

$generador_min = rand(0,26);
$generador_may = rand(0,26);
$generador_sig = rand(0,5);

$_SESSION["captcha"] = ($numero1).($minus[$generador_min]).($numero2).($mayus[$generador_may]).($signos[$generador_sig]).($numero3); // Guardamos el texto del CAPTCHA en la sesion
//echo "<img src=captcha.php>";
?>

<!--Formulario-->
   	<form method="POST" action="cargar.php" class="estilo_formulario">
		<input type="text" name="nombre" placeholder="Nombre" required /><br>
		<input type="text" name="apellido" placeholder="Apellido" required /><br>
		<input type="text" name="email" placeholder="E-mail" required /><br>
		<textarea name="consulta" placeholder="Consulta" rows="7" required></textarea>
		<img src="captcha.php">
		<label>Escriba c&oacutedigo de seguridad: </label>
  		<input name="confirmacion" type="text" id="confirmacion" />
    	<input type="submit" name="Submit" value="Comprobar" />
	</form>		
</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oacuten en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>