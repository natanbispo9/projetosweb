<?php
	//strtolower
	$text = "Curso completo\n";
	echo strtolower($text);
	
	echo strtoupper($text);
	$text2 = "afdsdfsdfs\n";
	echo $text2;
	echo ucfirst($text2);
	echo strlen($text);

	$cpf = "123.113.123-45";
	$cpf =  str_replace('.', '', $cpf);
	$cpf =  str_replace('-', '', $cpf);
	echo $cpf;

	$text = "Hey ho, hey ho, jfhskjfhsdkjfhsfdkjfhsdkjfhskjfhskjfhskjdfh";
	echo substr($text,0,5);


	

	
?>