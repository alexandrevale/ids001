<?php

class Quadrado{
    public $lado, $area, $perimetro;
    public function __construct($lado){
        $this->lado = $lado;
        
    }
    
    public function perimetro(){
        $this->perimetro = $this->lado * 4;
        echo "<p>Perimetro: $this->perimetro</p>";
    }
    
    public function area(){
        $this->area = $this->lado * $this->lado;
        echo "<p> area: $this->area </p>";
    }
    
}
$quadrado = new Quadrado($_POST['lado']);

if($_POST['tipo'] == 'perimetro'){
    $quadrado->perimetro();
}
else if($_POST['tipo'] == 'area'){
    $quadrado->area();
}
else{
    echo 'erro';
}