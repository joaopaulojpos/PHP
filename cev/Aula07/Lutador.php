<?php

//Atributos
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // GETS
    private function getNome(){
        return $this->nome;
    }

    private function getNacionalidade(){
        return $this->nacionalidade;
    }

    private function getIdade(){
        return $this->idade;
    }

    private function getAltura(){
        return $this->altura;
    }

    private function getPeso(){
        return $this->peso;
    }

    private function getCategoria(){
        return $this->categoria;
    }

    private function getVitorias(){
        return $this->vitorias;
    }

    private function getDerrotas(){
        return $this->derrotas;
    }

    private function getEmpates(){
        return $this->empates;
    }

    //SETs
    private function setNome($nome){
        $this->nome = $nome;
    }

    private function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade($idade){
        $this->idade = $idade;
    }

    private function setAltura($altura){
        $this->altura = $altura;
    }

    private function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria($categoria){
        if ($peso < 52..2) {
            # code...
        }
        $this->categoria = $categoria;
    }

    private function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    private function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    private function setEmpates($empates){
        $this->empates = $empates;
    }  

    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitoria = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function apresentar(){

    }

    public function status(){

    }

    public function ganharLuta(){

    }

    public function perderLuta(){

    }

    public function empatarLuta(){

    }
}


?>