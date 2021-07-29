<?php
$password = password_hash($_POST['clave'], PASSWORD_DEFAULT, array('cost'=> 4));

$usuario = $_POST['usuario'];

$bd=mysqli_connect("localhost", "root", "", "php_avanzado") or die ("Error al conectar con la base de datos");

mysqli_query($bd, "INSERT INTO user_pass VALUES ('$usuario', '$password')");

header("Location: index.php?ok");
?>