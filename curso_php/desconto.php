<?php
	require_once("func_descontos.php");
	$vtotal = 1000;
	$vdesc = 10;
	$vfinal = calcula_desc($vtotal, $vdesc);

?>

Valor Total: R$ <?php echo$vtotal; ?> <br>
Valor desconto: <?php echo$vdesc; ?>% <br>
Valor final: <?php echo$vfinal; ?> <br>
