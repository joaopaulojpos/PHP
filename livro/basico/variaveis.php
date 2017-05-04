<?php
//declara variavel com valor TRU
$exibir_nome = TRUE;

//test se $exibir_nome é TRUE
if($exibir_nome)
{
	echo "José da Silva";
}

$umidade = 91;

//teste se é maior que 90. Retorna um boolean
$vai_chover = ($umidade > 90);

if($vai_chover)
{
	echo "<br/> Está chovendo";
}

	define("MAXIMO_CLIENTES",100);
	echo MAXIMO_CLIENTES;
?>
