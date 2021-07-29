<?php

	// Recibimos la información del formulario usando $_POST[] y lo almacenamos en variables 
	$unidad_formulario = $_POST['unidad'];
	$fecha_formulario = $_POST['fecha'];

	// Archivo de conexión a la BD	
	include('conexion.php');

	// Función mysqli_query() para llevar los datos que tenemos para llevar a nuestra Base de Datos
	mysqli_query($datos_bd, "INSERT INTO clases (id_clase, unidad, fecha) VALUES (DEFAULT, '$unidad_formulario', '$fecha_formulario')");

	// Redireccionamos la página
	header("Location: ver_clases.php");

?>