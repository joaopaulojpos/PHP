<?php
class Pessoa
{
	var $Codigo;
	var $Nome;
	var $Altura;
	var $Idade;
	var $Nascimento;
	var $Escolaridade;
	var $Salario;
	
	/*método construtor
	 *inicializa as propriedades
	*/
	function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
	{
		$this->Codigo = $Codigo;
		$this->Nome = $Nome;
		$this->Altura = $Altura;
		$this->Idade = $Idade;
		$this->Nascimento = $Nascimento;
		$this->Escolaridade = $Escolaridade;
		$this->Salario = $Salario;
	}
	
	/*método Crescer
	 * aumenta a altura em $centimetros
	 */
	function Crescer($centimetros)
	{
		if($centimetros > 0)
		{
			$this->Altura += $centimetros;
		}
	}

        /*método Fomar
         *altera a escolaridade para $titulacao  
         */
	function Formar($titulacao)
	{
		$this->Escolaridade = $titulacao;
	}

        /*método Envelhecer
         *aumenta a Idade em $anos  
         */

	function Envelhecer($anos)
	{
		if($anos > 0)
		{
			$this->Idade += $anos;
		}
	}

	/*método destrutor
	 *finaliza Objeto
	*/
	function __destruct()
	{
		echo "Objeto {$this->Nome} finalizado... <br/>";
	}

}
?>
