<?php
	if ($a = 5)
	{
		echo 'essa operação atribui 5 á variável $a e retorna verdadeiro';
	}

	$a = 1234;
	$b = '1234';

	if ($a == $b)
	{
		echo "<br/>";
		echo'$a e $b são iguais';
	}
	else if ($a != $b)
	{
		echo '$a e $b são diferentes';
		echo "<br/>";
	}

	$c = 1234;
	$d = '1234';

	if ($c === $d)
	{
		echo "<br/>";
		echo '$c e $d são iguais e do mesmo tipo';
	}
	if ($c !== $d)
	{
		echo "<br/>";
		echo '$c e $d são de tipos diferentes';
	}
?>
