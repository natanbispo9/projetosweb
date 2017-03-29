<?php
	class Calculadora{
		private $num1;
		private $num2;
		private $total;
		function __construct(){
			$this->total = 0;
			$this->num1 = 0;
			$this->num2 = 0;
		}

		public function setNum1($num1){
			$this->num1 = $num1;

		}

		public function setNum2($num2){
			$this->num2 = $num2;

		}

		public function somar(){
			$this->total = $this->num1 + $this->num2;
		}

		public function subitrair(){
			$this->total = $this->num1 - $this->num2;
		}

		public function mutiplicar(){
			$this->total = $this->num1 * $this->num2;
		}

		public function dividir(){
			$this->total = $this->num1 / $this->num2;
		}


		public function getTotal(){
			return $this->total;
		}
	}
?>