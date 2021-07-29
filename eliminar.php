<?php
include('includes.php');
$cod = $_POST['codigo'];
// Elimina de la tabla compras
$eliminar = $carrito->eliminarProducto($cod);
header("Location: ver_carrito.php");
?>