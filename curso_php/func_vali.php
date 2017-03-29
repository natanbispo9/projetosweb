<?php
	function validao_login($login, $senha){
		$login_bd = 'natan';
		$senha_bd = 123;

		if ($login == $login_bd && $senha == $senha_bd){
			return true;
		}

		return false;
	}
?>