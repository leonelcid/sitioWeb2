<?php
	if($_POST){
		// Valores que recibimos del formulario
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$anio = $_POST['anio'];

		// Zona horaria de Río Gallegos - Argentina
		date_default_timezone_set("America/Argentina/Rio_Gallegos");
		$fecha_actual = date("Y-m-d");

		// Armamos la fecha que recibimos del formulario
		$fecha_formulario = date("$anio-$mes-$dia");

		// Muestra por pantalla la fecha que armamos, a modo de prueba
		echo "Esta es la fecha ingresada: ".$fecha_formulario."<br>";
		echo "<br>";
		echo "Esta es la fecha actual: ".$fecha_actual."<br>";

		if($fecha_formulario <= $fecha_actual){
			echo "<hr><p>Debe ingresar una fecha posterior a <b>$fecha_actual</b></p>";
		} else {
			$s = strtotime($fecha_formulario)-strtotime($fecha_actual);
			$d = intval($s/86400);
			echo "<hr><p>Días restantes hasta la fecha: <b>$d</b></p>";
		}

	}

	//header("Location: unidad2.php");
	// En esta línea me dio un error, cuando la anulé funcionó correctamente
?>