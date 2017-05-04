<?php
	

$vetor = array('Palio','Gol','Fiesta','Corsa');
print_r($vetor);

$nome = "João";
$sobremone = "da Silva";
echo "$sobrenome", "$nome";

//define o nome da variavel
$variavel = 'nome';

//cria variavel identificada pelo conteúdo de $variavel
$$variavel = 'maria';

//exibe variável $nome na tela
echo $nome; //resultado = maria

$a = 5;
$b = $a;
$b = 10;
echo "<br> $a"; //resultado = 5
echo $b; //resultado = 10

$a = 5;
$b = &$a;
$b = 10;
echo "<br> $a"; //resultado = 10
echo "<br> $b"; //resultado = 10
?>
