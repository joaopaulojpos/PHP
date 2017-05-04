<?php

class ContaPoupanca extends Conta
{

	var $Aniversario;
	
	/* método construtor (sobrescrito)
	 * agora, também inicializa a variável $Aniversario
	*/
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
	{

		//chamda do método construtor da classe-pai.
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Aniversario = $Aniversario;	
	}

	/*método Retirar (sobrescrito)
	 *verifica se há saldo para retirar tal $quantia.
	*/
	function Retirar($quantia)
	{
		if($this->Saldo >= $quantia)
		{
			//Executa método da classe-pai
			parent::Retirar($quantia);
		}
		else
		{
			echo "Retirada não permitida... <br/>";
			return false;
		}

		//retirada permitida
		return true;		

	}

}

?>
