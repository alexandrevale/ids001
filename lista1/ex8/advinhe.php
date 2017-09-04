<?php
/*Exercício 1.8. Implemente uma classe que modele um jogo de advinhação de números de 0 a 99.
Atributos: um número inteiro sorteado.
Métodos: Sortear(), Advinhar().*/
class Advinhe{
    public $n1, $sorteado;
    public function __construct($n1){
        $this->n1 = $n1;
    }
    public function Sortear(){
        $this->sorteado = rand(0, 99);
    }
    public function Advinhar(){
        $this->Sortear();
        if($this->n1 == $this->sorteado){
            echo "Resultado: Acertooou!";
        }else{
            echo "Resultado: Eroooooou!, o número era $this->sorteado";
        }
    }
}
$tentativa = new Advinhe(0);
$tentativa->n1 = ($_POST["n1"]);
$tentativa->Advinhar();