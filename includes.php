<?php
include('clases/basededatos.php'); 
include('clases/constantes.php');
include('clases/producto.php');
include('clases/carrito.php');
$base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);
$carrito = new Carrito($base);
?>