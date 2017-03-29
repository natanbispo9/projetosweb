<?php

	require_once('db.class.php');

	
	$sql = " SELECT * FROM usuarios";
	//echo $sql;

	$objDB = new db();
	$link = $objDB->conecta_mysql();

	//update true/false
	//insert true/false
	//select false/ressource 
	//delete true/false
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		//$dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_NUM);
		//var_dump($dados_usuario);

		$dados_usuario = array(); 
		
		while ($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			$dados_usuario[] = $linha;
		}
		foreach ($dados_usuario as $usuario){
			var_dump($usuario['email']);
			echo $usuario['email'];
			echo '<br /><br />';
		}
	} else {
		echo 'erro login';
	}

?>