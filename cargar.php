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
<?php
if($_POST){
$confirmacion = $_POST['confirmacion'];

$nombre_formulario = $_POST['nombre'];
$apellido_formulario = $_POST['apellido'];
$email_formulario = $_POST['email'];
$consulta_formulario = $_POST['consulta'];

if($confirmacion == $_SESSION['captcha'])
{
echo "<p>Informaci&oacuten enviada con &eacutexito!</p>";
# Hacemos la conexión
include('conexion.php');
# Query a la BD
mysqli_query($datos_bd, "INSERT INTO consultas (nombre, apellido, email, consulta) VALUES ('$nombre_formulario', '$apellido_formulario', '$email_formulario', '$consulta_formulario')");

}else{
echo "<p>Error</p>";
echo "<a href='unidad5.php'>Volver</a>";
}
}
?>
</section>
<aside>
<!--Formulario-->
   	<form method="POST" action="cargar.php" class="estilo_formulario">
		<input type="text" name="nombre" placeholder="Nombre" required /><br>
		<input type="text" name="apellido" placeholder="Apellido" required /><br>
		<input type="text" name="email" placeholder="Correo" required /><br>
		<textarea name="consulta" placeholder="Consulta" rows="7" required></textarea>
		<img src="captcha.php">
		<label>Escriba c&oacutedigo de seguridad: </label>
  		<input name="confirmacion" type="text" id="confirmacion" />
		<input type="submit" value="Enviar" />
	</form>		
</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programaci&oacuten en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>