<?php
	$arquivo = "/var/www/html/poliveirajpos/livro/texto.txt";

	if(file_exists($arquivo))
	{
		echo "Arquivo existente";
	}
	else
	{
		echo "Arquivo Não existente";
	}
	echo "<br/> O diretorio atual é: " . getcwd();
?>
