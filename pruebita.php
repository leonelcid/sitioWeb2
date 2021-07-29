<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
 
<body>
 	<h3>
 		<?php

 			echo"Estas lineas nos muestran informacion de la hora de nuestro sistema </br>";

 			date_default_timezone_set("America/Argentina/Buenos_Aires");
			$fecha = getdate(time());
			echo ("Día: " . $fecha["mday"]."<br/>");
			echo ("Mes: " . $fecha["mon"]."<br/>");
			echo ("Año: " . $fecha["year"]."<br/>");
			echo ("Hora: " . $fecha["hours"]."<br/>");
			echo ("Minutos: " . $fecha["minutes"]."<br/>");
			echo ("Segundos: " . $fecha["seconds"]."<br/>");
 		
			echo("------------------------------------------------------------------------</br>");

			echo("Dia en String, fecha y anio en cuatro digitos");
			date_default_timezone_set('America/Argentina/Rio_Gallegos');
			setlocale(LC_TIME, 'spanish');
			echo "<h1>".strftime("Ejemplo 1: %A, %d de %B de %Y")."</h1>";

			echo("------------------------------------------------------------------------</br>");

			echo("Calculos de fechas, -12 horas, -2 dias, -1 año, el proximo Jueves, el ultimo Lunes");
			echo $date=date("d-m-Y H:i:s"); echo "<br/>";
			echo $date=date("d-m-Y H:i:s", strtotime ("-12hours")); echo "<br/>";
			echo $date2=date("d-m-Y H:i:s", strtotime ("-2days")); echo "<br/>";
			echo $date3=date("d-m-Y H:i:s", strtotime ("-1years"));echo "<br/>";
			echo $date4=date("d-m-Y H:i:s", strtotime ("next Thursday")); echo "<br/>";
			echo $date5=date("d-m-Y H:i:s", strtotime ("last Monday"));

			echo("------------------------------------------------------------------------</br>");
			echo ("Segundos, sin transformar con la funcion date()");
			echo strtotime ("now"), "\n";
			echo strtotime ("10 September 2000"), "\n"; echo strtotime ("+1 day"), "\n";
			echo strtotime ("+1 week"), "\n";
			echo strtotime ("+1 week 2 days 4 hours 2 seconds"), "\n"; echo strtotime ("next Thursday"), "\n";
			echo strtotime ("last Monday"), "\n";

			echo("------------------------------------------------------------------------<br/>");
			echo("Funcion</br>");

			function dias_restantes($fecha_final) {
				$fecha_actual = date("Y-m-d");
				$s = strtotime($fecha_final)-strtotime($fecha_actual);
				$d = intval($s/86400);
				echo "Días restantes hasta la fecha $fecha_final: $d";
			}

			//para usarlo: dias_restantes("2020-11-01");

			echo dias_restantes("2021-05-30");

			echo("------------------------------------------------------------------------<br/>");

			echo("------------------------------------------------------------------------<br/>");

			$fecha_actual = localtime(time(),1);
			$anio_actual = $fecha_actual['tm_year'] + 1900;
			$mes_actual = $fecha_actual['tm_mon'] + 1;
			$dia_actual = $fecha_actual['tm_mday'];
			echo "<p>Hoy es el $dia_actual/$mes_actual/$anio_actual.</p>";

			echo("<br>------------------------------------------------------------------------<br/>");

			function fecha_actual(){
				$week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
				$months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
				$year_now = date ("Y");
				$month_now = date ("n");
				$day_now = date ("j");
				$week_day_now = date ("w");
				$date = $week_days[$week_day_now] . ", " . $day_now . " de " .
				$months[$month_now] . " de " . $year_now;
				echo $date;
			}
			
			echo fecha_actual();

			echo("<br>------------------------------------------------------------------------<br/>");

			$dia = 29;
			$mes = 10;
			$anio = 2020;
			if (checkdate($mes, $dia, $anio)) {
				echo "<p>El día $dia/$mes/$anio existe.</p>";
			} else {
				echo "<p>El día $dia/$mes/$anio no existe.</p>";
			}
			$dia = 29;
			$mes = 10;
			$anio = 2019;
			if (checkdate($mes, $dia, $anio)) {
				echo "<p>El día $dia/$mes/$anio existe.</p>";
			} else {
				echo "<p>El día $dia/$mes/$anio no existe.</p>";
			}

			?>
 	</h3>
</body>
</html>