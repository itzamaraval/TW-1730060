<?php

	class Conexion{
		public function conectar(){
	
			$link = new PDO("mysql:host=138.68.2.102;dbname=BaseDatos","rooadmint","a58f7bd26723b03e63663e9781d6e66088070d4b881fb6a1");
			return $link;
		}
	}

?>
