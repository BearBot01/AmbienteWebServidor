<?php
	require ('Cuentas.php');
	class Banco{


		public $cuentas;


		function __construct(){
			$this->cuentas=[];
		}

		function add(){
		for ($i=0; $i <= 2 ; $i++) { 
			$this->cuentas = new Cuentas($i,$i+100);
		}
		}

		function buscar(){
		foreach($this->cuentas as $a){
			echo $a->id."  ". $a->monto ;
		}
		}
		function suma($id,$monto){
			foreach ($this->cuentas as $key) {
				if ($key->id == $id) {
					$key->depositar($monto);
				}else{
					return;
				}
				
			}
		}
		function resta($id,$monto){
			foreach ($this->cuentas as $key) {
				if ($key->id == $id) {
					$key->retirar($monto);
				}else{
					return;
				}
				
			}
		}
		function opera($id,$monto){
			foreach ($this->cuentas as $key) {
				if ($key->id == $id) {
					$key->transferir($monto);
				}else{
					return;
				}
				
			}
		}

		


	}

	$test = new Banco();
	$test->add();
	$test->buscar();
	$test->suma(1,1000);
	$test->resta(2,10);
	$test->opera(1,2000);


?>