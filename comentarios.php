
<?php
// Recibir los datos enviados de unidad3.php por $_POST['...']
	//$nya_formulario = $_POST['nya'];
	//$mail_formulario = $_POST['mail'];
	//$comentario_formulario = $_POST['comentario'];

// Creación del archivo en modo escritura 'w'
	if($_POST){
		$archivo = fopen('comentarios.txt', 'a+');
		
		// Fecha y hora
		// Guardar la información en un archivo de texto junto con la fecha y la hora en la que fueron enviados
		date_default_timezone_set("America/Argentina/Rio_Gallegos");
		$fecha_actual = date("d-m-Y");
		$hora_actual = date("H:i");

		$texto = '<p>Nombre y Apellido: '.$_POST['nya']."</p><p>Mail: ".$_POST['mail']."</p><p>Comentario: ".$_POST['comentario']."</p><p>Fecha de creaci&oacuten: ".$fecha_actual."</p><p>Hora de creaci&oacuten: ".$hora_actual."</p><hr>";
		fputs($archivo, $texto); 
		fclose($archivo);
	}	
?>