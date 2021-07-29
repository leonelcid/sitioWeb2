<?php
	
class Carrito{

	// Atributo privado
	private $bd;

	// Constructor
	function __construct($base){
		$this->bd = $base;
	}

	// Función de inserción en la Base de Datos
	public function insertarProducto($codigo, $nombreProd, $descripcion, $precio){
		$respuesta = $this->bd->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT, $codigo, '$nombreProd', '$descripcion', $precio)");
		return $respuesta;
	}

	public function listarProductos(){
		$respuesta = array();
		$respuesta = $this->bd->ejecutarConsultas("SELECT * FROM productos");
		return $respuesta;
	}

	public function listarProductosComprados(){
		$respuesta = array();
		$respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras");
		return $respuesta;
	}

	public function listarProducto($id){
		$respuesta = $this->bd->ejecutarConsultas("SELECT * FROM productos WHERE codigo = $id");
		return $respuesta;
	}

	public function eliminarProducto($id){
		$respuesta = $this->bd->ejecutarConsultas("DELETE FROM compras WHERE codigo = $id");
		return $respuesta;
	}

	/*
	public function actualizarProducto($id, $cod, $nombreProd, $descripcion, $precio){
		$respuesta = $this->bd->ejecutarConsultas("UPDATE compras SET codigo = $cod, producto = '$nombreProd', descripcion = '$descripcion', precio = $precio WHERE codigo = $id");
		return $respuesta;
	}*/

}	// Fin de la clase

?>