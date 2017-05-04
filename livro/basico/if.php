<?php
	$salario = 1020; //R$
	$tempo_servico = 12; //meses
	$tem_reclamacoes = false; //boleano
	if ($salario > 1000)
	{
		if($tempo_servico >= 12)
		{
			if($tem_reclamacoes != true)
			{
				echo 'Parabéns, você foi promovido';
			}
		}
	}

// Metodo utilizando o AND

	if (($salario > 1000) and ($tempo_servico >= 12) and ($tem_reclamacoes != true))
	{
		echo"<br/>";
		echo 'Parabéns, você foi promovido';
	}
?>
