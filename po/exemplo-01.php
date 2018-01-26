<?php

class Pessoa {
    public $nome;

    public function falar(){
        return "O meu nome é ".$this->nome;
    }
}

$joao = new Pessoa();
$joao->nome = "João Paulo";
echo $joao->falar();

?>