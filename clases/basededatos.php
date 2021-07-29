<?php
	class Basededatos{
		
		private $conexion;
		public $error;

		function __construct($servidor, $usuario, $clave, $base){
			if(!$this->_connect($servidor, $usuario, $clave, $base)){
				$this->error = $this->conexion->connect_error;
			}
		}

		private function _connect($servidor, $usuario, $clave, $base){
			$this->conexion = new mysqli($servidor, $usuario, $clave, $base);
		}

		public function ejecutarConsultas($query){

			$tipo = strtoupper(substr($query, 0,6));

			switch ($tipo) {
				case 'INSERT':
					$resultado = $this->conexion->query($query);
					if(!$resultado){
						$this->error = $this->conexion->error;
						return false;
					} else {
						return $this->conexion->insert_id;
					}
					break;
				case 'SELECT':
					$resultado = $this->conexion->query($query);
					if(!$resultado){
						$this->error = $this->conexion->error;
						return false;
					} else {
						$array_resultado = array(); // Fijarse
						while($fila = $resultado->fetch_assoc()){
							$array_resultado[] = $fila;
						}
						return $array_resultado;
					}
					break;

				case 'UPDATE':
				case 'DELETE':
					$resultado = $this->conexion->query($query);
					if(!$resultado){
						$this->error = $this->conexion->error;
						return false;
					} else {
						return $this->conexion->affected_rows;
					}
					break;	
				default:
					$this->error = "Consulta no permitida.";
					break;
			} // Cierre del switch

		}	// Cierre de la función

	} // Cierre de clase
?>