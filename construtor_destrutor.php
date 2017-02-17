<?php
	
	class Pessoa{
		private $nome;

		function __construct($para_nome){

			echo 'contrutor iniciado <br>';
			$this->nome = $para_nome;
			echo $this->nome.'<br>';
		}
		public function correr(){
				echo $this->nome." correndo<br>";
			}
		function __destruct(){
			echo 'objeto removido';

		}	
	}

	$pessoa = new Pessoa('natan');
	$pessoa->correr();

?>