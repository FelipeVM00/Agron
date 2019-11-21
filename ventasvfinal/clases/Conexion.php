<?php 

	class conectar{
		private $servidor="fdb18.awardspace.net";
		private $usuario="3128185_base";
		private $password="Avalon.2019";
		private $bd="3128185_base";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}


 ?>