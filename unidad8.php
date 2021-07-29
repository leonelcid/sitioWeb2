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
		<h2>Registro</h2>
		<h2>Registrar Password:</h2>
			<form action="unidad8/registro.php" method="post">
				Usuario: <br /><input type="text" name="usuario" /><br />
				Password: <br /><input type="password" name="clave" /><br />    
    			<input type="submit" name="ingresar" value="Ingresar" />
    			<h3>
        			<?php
        				if(isset($_GET['ok'])) {
            				echo "Usuario registrado";
            			}  
            		?>
    			</h3>
			</form>
		<h2>Ingresar:</h2>
			<form action="unidad8/ingreso.php" method="post">
    		<!-- probar con usuario: admin / contraseña: admin -->
    			Usuario: <br /><input type="text" name="usuario" /><br />
    			Password: <br /><input type="password" name="clave" /><br />    
    			<input type="submit" name="ingresar" value="Ingresar" />
    			<h3>
        			<?php
         				if(isset($_GET['error'])) {
            				echo "Contraseña incorrecta";
            			}  
            			if(isset($_GET['verificado'])) {
            				echo "Contraseña verificada!";
            			}
            		?>
    			</h3>
			</form>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>