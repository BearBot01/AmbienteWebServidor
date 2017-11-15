<?php

	class Fecha{

		public $dia;
		public $mes;
		public $year;
		public $formato;

		function __construct($dia,$mes,$year){
			$this->formato = "$dia/$mes/$year";
			$this->dia = $dia;
			$this->mes = $mes;
			$this->year = $year;
		}

		function date(){
			echo $this->formato."<br>";
		}

		function mañana(){
			if ($this->mes == 12 && $this->dia == 31) {
				$this->formato = "1/1/".($this->year+1);
			}
			
			else if($this->dia == 31 && $this->mes <12){
				$this->formato = "1/".($this->mes+1)."/$this->year";
			}
			else{
				$this->formato = ($this->dia+1)."/$this->mes/$this->year";
			}
		}
		function ayer(){
			if ($this->mes == 1 && $this->dia == 1) {
				$this->formato = "31/".($this->mes-1)."$this->year";
			}
			
			else if($this->dia == 31 && $this->mes <12){
				$this->formato = "1/".($this->mes-1)."/$this->year";
			}
			else{
				$this->formato = ($this->dia-1)."/$this->mes/$this->year";
			}
		}
		function dehoyenocho(){
			if ($this->mes == 12 && $this->dia == 31) {
				$this->formato = "7/1/".($this->year+1);
			}
			
			else if($this->dia == 31 && $this->mes <12){
				$this->formato = "7/".($this->mes+1)."/$this->year";
			}
			else{
				$this->formato = ($this->dia+8)."/$this->mes/$this->year";
			}
		}


	}

	$test = new Fecha(31,12,2010);
	$test2 = new Fecha(1,1,2010);
	$test3 = new Fecha(12,10,2010);
	$test->mañana();
	$test->date();
	$test->ayer();
	$test->date();
	$test->dehoyenocho();
	$test->date();
	
	$test2->mañana();
	$test2->date();
	$test2->ayer();
	$test2->date();
	$test2->dehoyenocho();
	$test2->date();

	$test3->mañana();
	$test3->date();
	$test3->ayer();
	$test3->date();
	$test3->dehoyenocho();
	$test3->date();



?>