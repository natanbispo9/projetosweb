<?php
	function calcula_desc($vtotal, $desc){
		
		$vdesc = $vtotal * ($desc/100);
		$vcomdesc = $vtotal - $vdesc;

		return $vcomdesc;
	}
?>