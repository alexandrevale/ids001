<?php
/*Implemente a classe Telefone que possua os
atributos: ddd e número (Strings) e os métodos: obterNumero() e obterDDD().*/
class Telefone{
    public $ddd, $numero;
    public function __construct ($ddd, $numero){
        $this->ddd = $ddd;
        $this->numero = $numero;
    }
    public function obterNumero(){
        $this->numero = $numero;
    }
    public function obterDDD(){
        $this->ddd = $ddd;
    }
}
$cadastro = new Telefone(0, 0);