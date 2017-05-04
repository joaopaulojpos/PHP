<?php
	$cores = array('vermelho' => 'FF0000', 'azul' => '0000FF', 'verde' => '00FF00');

	$carros['Palio']['cor'] 	= 'azul';
	$carros['Palio']['potência']  	= '1.0';
	$carros['Palio']['opcionais']   = 'Ar Cond.';
	$carros['Corsa']['cor']		= 'cinza';
        $carros['Corsa']['potência']    = '1.3';
        $carros['Corsa']['opcionais']   = 'MP3';
        $carros['Gol']['cor']           = 'Branco';
        $carros['Gol']['potência']      = '1.0';
        $carros['Gol']['opcionais']     = 'Metalica';

	if(in_array('vermelho', $cores))
	{
		echo 'Encontrado com Sucesso';
	}
	else
	{
		echo 'Não foi encontrado';
	}
	
	/*
	echo "$cores[vermelho] <br/>";
	echo $cores['azul'];
	echo $cores['verde'];
		

	foreach ($carros as $modelo => $caracteristicas)
	{
		echo " => modelo $modelo <br/>";
		foreach ($caracteristicas as $caracteristica => $valor)
		{
			echo "caracteristica $caracteristica => $valor <br/>";
		}
	}
	*/
?>
