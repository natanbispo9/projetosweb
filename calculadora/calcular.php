<?php

	require_once 'classes/calculadora.php';

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacao = $_POST['operacao'];

	$calculadora  = new Calculadora();

	$calculadora->setNum1($num1);
	$calculadora->setNum2($num2);

	switch ($operacao) {
		case 'somar':
			$calculadora->somar();
			break;

		case 'subitrair':
			$calculadora->subitrair();
			break;

		case 'mutiplicar':
			$calculadora->mutiplicar();
			break;		
		
		case 'dividir':
			$calculadora->dividir();
			break;

		default:
			# code...
			break;
	}

	echo $calculadora->getTotal();

?>