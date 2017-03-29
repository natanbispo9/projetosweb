<?php
	class Felino{
		public $mamifero = 'sim';

		function correr(){
			echo 'Correr como felino <br>';
		}

	}

	class Chita extends Felino{
		//polimorfismo
		function correr(){
			echo 'correr 100km/h <br>';
		}



	}

	class Gato extends Felino{


	}

	$chita = new Chita();
	echo $chita->mamifero.'<br>';
	$chita->correr();
	$gato = new Gato();
	$gato->correr();


?>
