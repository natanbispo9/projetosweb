<?php
	/*//isset
	false - > não existir variavel, null
	$valor = '';
	//isset($valor);
	//true, foi iniciada
	if (isset($valor)){
		echo 'true yess';
	}
	else {
		echo 'false false';
	}*/

	//empty
	//true - > '', 0, '0', false, null, array()
	//empty($valor);

	$valor = '123';
	if (is_numeric($valor)){
		echo 'true';
	}
	else {
		echo 'false false';
	}
?>