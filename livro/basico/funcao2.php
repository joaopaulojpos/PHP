<?php
	function Ola()
	{
		$argumentos = func_get_args();
		$quantidade = func_num_args();

		for($n=0; $n<$quantidade; $n++)
		{
			echo'Olá '. $argumentos[$n] . "<br/>";
		}
	}
	Ola('João', 'Maria', 'José', 'Pedro');
?>
