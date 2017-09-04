<?php
/*Exercício 1.9. Implemente a classe Eq2Grau que possua:
Atributos: a,b e c (doubles);
Métodos: 
delta(): retorna o delta da equação;
raiz1(): retorna a primeira raiz se Delta >= 0, se não retorna NaN;
raiz2(): retorna a segunda  raiz se Delta >= 0, se não retorna NaN.
*/
class Eq2Grau{
    public $a, $b, $c, $resultado;
    public function __construct($a, $b, $c, $resultado){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->resultado = $resultado;
    }
    public function delta(){
        $this->resultado = ($this->b * $this->b) - ((4 * $this->a) * $this->c);
    }
    public function raiz1(){
        $this->delta();
        $raiz1 =  (- $this->b + sqrt($this->resultado)) / (2 * $this->a);
        echo "<h1> A raiz 1 é: $raiz1 </h1>";
    }
    public function raiz2(){
        $this->delta();
        $raiz2 = (-$this->b - sqrt($this->resultado)) / (2 * $this->a);
        echo "<h1> A raiz 2 é: $raiz2 </h1>";
    }    
}
$calculo = new Eq2Grau(0, 0, 0, 0);
$calculo->a = ($_POST["a"]);
$calculo->b = ($_POST["b"]);    
$calculo->c = ($_POST["c"]);
$calculo->raiz1();
$calculo->raiz2();