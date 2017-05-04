<?php
	$total = 0;
	function km2mi(quilometros)
	{
		global $total;
		$total += $quilometros;
		return $quilometros * 0.6;
	}
	echo 'percorreu ' . km2mi(100) . " milhas \n";
	echo 'percorreu ' . km2mi(200) . " milhas \n";
	echo 'percorreu no total '. $total . " quilometros \n";
?>
