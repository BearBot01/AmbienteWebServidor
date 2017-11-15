<?php

	class cuentas {

		public $id;
		public $monto;


		function __construct($id,$monto){
			$this->id = $id;
			$this->monto=0;
		}

		function depositar($monto){
			$this->monto+= $monto;
		}
		function retirar($monto){
			$this->monto-=$monto;
		}
		function transferir($id,$monto){
			$this->monto+= $monto;
		}



	}






?>