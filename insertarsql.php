<?php
// Esta clase inserta información en la base de datos
include('clases/basededatos.php');
include('clases/constantes.php');
//include('clases/carrito.php');
include('clases/producto.php');

// Instanciamos la BD
$base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Producto($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
$carrito = new Carrito($base);
$carrito->insertarProducto($prod);

// Instanciamos el carrito de compra
//$carrito = new Carrito($base);
// Instanciamos el producto
//$producto = new Producto($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
// El carrito inserta un producto en la BD
//$carrito->insertarProducto($producto);
//$carrito->insertarProducto($_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
header("Location: unidad7.php?ok");
?>