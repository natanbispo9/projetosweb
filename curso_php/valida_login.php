<?php
	
	require_once("func_vali.php");
	$login_user = $_POST['login'];
	$senha_user = $_POST['senha'];
	$usario_validado =  validao_login($login_user, $senha_user);
	
	if($usario_validado){
		echo "Acesso liberado";
	}else{
		echo "Acesso negado";
	}

?>