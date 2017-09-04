<?php
/*Exercício 1.2. Implemente uma classe Lâmpada com os seguintes
componentes, e faça um teste ao final:
Atributos: estado(String)
Métodos:
• click(): ao chamar este método a lâmpada é colocada no estado "apagada", caso esteja "acesa", 
e é colocado no estado "acesa"caso esteja "apagada".
• qtdAcendimentos(): retorna quantas vezes a lâmpada foi acesa
(DICA: este método deve ser chamada no método acima).
• checaEstado(): retorna o estado atual da Lâmpada.*/
class Lampada{
    public $estado = "apagada", $qtAcesa = 0;
    public function __construct($estado, $qtAcesa){
        $this->estado = $estado;
        $this->qtAcesa = $qtAcesa;
    }
    public function click(){
        if($this->estado == "acesa"){
            $this->estado = "apagada";
            echo "<p>Lâmpada $this->estado </p>";
        }else{
            $this->estado = "acesa";
            $this->qtAcesa = $this->qtAcesa + 1;
            return "<p>Lâmpada $this->estado </p>";
        }
    }
    function qtdAcendimentos(){
        echo "<p> Quantidade de acendimentos: $this->qtAcesa </p>";
    }
    public function checaEstado(){
        echo "<p> Estado atual: $this->estado </p>";
    }
}
$novaLampada = new Lampada("apagada", 0);
/*$novaLampada->click();
$novaLampada->click();
$novaLampada->click();
$novaLampada->click();
$novaLampada->qtdAcendimentos();
$novaLampada->checaEstado();*/