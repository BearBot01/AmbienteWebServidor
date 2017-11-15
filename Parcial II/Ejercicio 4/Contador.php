<?php

	class Contador{


		public $numero;

		function __construct($numero){
			$this->numero = $numero;
		}


		function incrementar(){
			$this->numero++;
			echo $this->numero."<br>";
		}

		function decrementar (){
			$this->numero--;
			echo $this->numero."<br>";
		}
		function iniciar (){
			$this->numero = 0;
			echo $this->numero."<br>";
		}


	}

	$c1 = new Contador(1000);
	$c2 = new Contador(200);

	$c1->incrementar();
	$c1->decrementar();
	$c1->iniciar();

	$c2->incrementar();
	$c2->decrementar();
	$c2->iniciar();



?>