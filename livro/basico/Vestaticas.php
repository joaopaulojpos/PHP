<?php
	function percorre($quilometros)
	{
		static $total;
		$total += $quilometros;
		echo "percorreu mais $quilometros do total de $total <br/>";
	}
	percorre(100);
	percorre(200);
	percorre(50);
?>
