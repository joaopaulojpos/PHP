<?php
class Conta
{
	var $Agencia;
	var $Codigo;
	var $DataDeCriacao;
	var $Titular;
	var $Senha;
	var $Saldo;
	var $Cancelada;

	/* método construto
	 *inicializa as propriedades
	*/
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
	{
		$this->Agencia = $Agencia;
		$this->Codigo = $Codigo;
		$this->DataDeCriacao = $DataDeCriacao;
		$this->Titular = $Titular;
		$this->Senha = $Senha;
		$this->Saldo = $Saldo;
	}

	/* método Retirar
	 * diminui o saldo em $quantia
	 */
	function Retirar($quantia)
	{
		if($quantia > 0)
		{
			$this->Saldo -= $quantia;
		}
	}
        /* método Depositar
         * aumenta o saldo em $quantia
         */
	function Depositar($quantia)
	{
		if($quantia > 0)
		{
			$this->Saldo += $quantia;
		}
	}

        /* método ObterSaldo
         * retorna o Saldo Atual
         */

	function ObterSaldo()
	{
		return $this->Saldo;
	}

	/*método destrutor
	 *finaliza objeto
	*/
	function __destruct()
	{
		echo "Objeto {$this->Codigo} de {$this->Titular->Nome} finalizada... <br/>";
	}
}
?>
