<?php

	session_start();
	
	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = " SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";
	//echo $sql;

	$objDB = new db();
	$link = $objDB->conecta_mysql();

	//update true/false
	//insert true/false
	//select false/ressource 
	//delete true/false
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['usuario'])){

			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];

			header('Location: home.php');
		}else{
			header('Location: index.php?erro=1');
		}
	} else {
		echo 'erro login';
	}

?>