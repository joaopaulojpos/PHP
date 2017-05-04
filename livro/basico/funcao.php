<?php
	function calcula_obesidade($peso, $altura)
	{
		return $peso / ($altura * $altura);
	}
	echo calcula_obesidade(70,1.85);
?>
