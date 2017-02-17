<?php

	class Veiculo{

		//public
		//private
		//protected

		private $placa;
		private $cor;
		//private $tipo = 2; não via porque so se pode alterar em veiculo
		protected $tipo = 'caminonete';

		public function setPlaca($placa){
			$this->placa = $placa;
		}

		public function getPlaca(){
			return $this->placa;

		}
	}

	class Carro extends Veiculo{
		
		public function exibirTipo(){
			echo $this->tipo;
		}
	}



	$veiculo = new Veiculo();
	$veiculo->setPlaca('JAM6532');
	echo $veiculo->getPlaca().'<br>';
	$carro  = new Carro();
	$carro->exibirTipo();

?>