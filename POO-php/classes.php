<?php

	class Pessoa {
		public $nome;
		var $cpf;

		function setNome($nome_definido){
			$this-> nome= $nome_definido;
		}
		
		function getNome(){
			return $this-> nome;
		}
	}


	$pessoa = new Pessoa();
	$pessoa->setNome('natan');
	echo $pessoa->getNome(); 
?>