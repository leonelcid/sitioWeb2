<?php
class Producto{
	
	private $codigo; 
	private $nombre_prod; 
	private $descripcion;
	private $precio; 
	
	function __construct($cod, $nombre, $des, $pre){
		$this->codigo = $cod;
		$this->nombre_prod = $nombre;
		$this->descripcion = $des;
		$this->precio = $pre;
	}

	public function imprime_caracteristicas(){
		$datos = "C&oacutedigo: ".$this->codigo."<br>"."Producto: ".$this->nombre_prod."<br>"."Descripci&oacuten: ".$this->descripcion."<br>"."Precio: ".$this->precio."<br>";
		return $datos;
	}
}
?>