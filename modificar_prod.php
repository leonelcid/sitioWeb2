<?php
include('clases/basededatos.php'); 
include('clases/constantes.php');
include('clases/producto.php');
$base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Producto($base);

$prod->actualizarProducto($_POST['id'], $_POST['codigo'], $_POST['producto'], $_POST['descripcion'], , $_POST['precio']);

header("Location: ver_prod.php");

?>