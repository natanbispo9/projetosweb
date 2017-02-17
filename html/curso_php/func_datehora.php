<?php
	//date y= ano/ m mes /d dia -- 
	// y 15, Y 2015
	// h hora i minuto
	//echo date("d/m/Y h:i"); 
 	//strtotime
 	$inicial  = '2015-04-02';
 	$final = '205-04-05';
 	$timeInicial = strtotime($inicial);
 	$timefinal = strtotime($final);
 	$dif = $timeInicial - $timefinal;
 	echo $dif;

 	

?>