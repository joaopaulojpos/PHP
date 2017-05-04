<?php
	$minha_string = 'O rato roeu a roupa do rei de Roma';
	$encontrar = 'roupa';
	$posicao = strpos($minha_string, $encontrar);
	if($posicao)
	{
		echo "String encontrada na posição $posicao";
	}
	else
	{
		echo "String não encontrada";
	}
?>
