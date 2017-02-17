<?php

	//is_array
	$vet = "global";
	$retorno = is_array($vet);
	//true or false

	//in_array
	$vet= array('mac', 'mc', 'm');
	$retorno = in_array('mc', $vet);
	//true ou false

	//array_keys
 
	$produtos= array(10=>'note', 11=> 'pc');
	$chaves = array_keys($produtos);
	//var_export($chaves);

	//sort
	$frutas = array(0=>'mamora', 1=> 'banana', 2=> 'jamor');
	sort($frutas);
	//var_export($frutas);

	//ordenar mantendo o indice
	//asort
	$frutas = array(0=>'mamora', 1=> 'banana', 2=> 'jamor');
	asort($frutas);
	//var_export($frutas);

	//count
	$num = count($frutas);
	//array merge
	$array1 = array('mac', 'mc', 'm');
	$array2 = array('seila');
	$novo = array_merge($array1, $array2);
	//var_export($novo);

	//explode
	$string = "20/10/2020";
	$retorno = explode('/', $string);
	//var_export($retorno);

	//implode
	$nova2 = implode('/', $retorno);
	echo ($nova2);




?>
