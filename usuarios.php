<?php
class Usuario{
	private $nombre; 
	private $apellido; 
	private $edad; 

	function __construct($nom, $apel, $ed){
		$this->nombre = $nom;
		$this->apellido = $apel;
		$this->edad = $ed;
	}

	public function imprime_caracteristicas(){
		$datos = "Nombre y Apellido: ".$this->nombre." ".$this->apellido."<br>"."Edad: ".$this->edad;
		
		return $datos;
	}
}
?>