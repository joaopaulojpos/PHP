<?php

class ControleRemoto
{
	private $volume;
	private $ligado;
	private $tocando;

	function __construct(){
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}
}

?>