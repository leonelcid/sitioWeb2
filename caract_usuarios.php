<?php
if($_POST){
	include("usuarios.php");
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	
	# Instanciamos la clase y le damos valores por argumentos al constructor
	#$usuario = new Usuario($nombre, $apellido, $edad);
	#$usuario->imprime_caracteristicas();

	#header("Location: unidad6.php");
}
?>