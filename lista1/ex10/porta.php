<?php
/*Exercício 1.10. Implemente a classe Porta que possua:
Atributos: isOpen(boolean), numAberturas(int);
Métodos: 
abrir(): abre a porta e conta 1 na contagem de aberturas;
fechar(): fecha a porta. OBS: O atributo numAberturas deve
contar o total de aberturas de todas as portas possíveis.
*/
class Porta{
    public $isOpen, $numAberturas;
    public function __construct($isOpen, $numAberturas){
        $this->isOpen = $isOpen;
        $this->numAberturas = $numAberturas;
    }
    public function abrir(){
        if($this->isOpen == false){
            $this->isOpen = true;
            $this->numAberturas = $this->numAberturas + 1;
            echo "<p>Porta Aberta. Quantidade de aberturas: $this->numAberturas </p>";
        }else{
            echo "<p>A porta esta aberta</p>";
        }
    }
    public function fechar(){
        $this->isOpen = false;
        echo "<p>Porta Fechada</p>";
    }
}
$novaPorta = new Porta(false, 0);
$novaPorta->abrir();
$novaPorta->abrir();
$novaPorta->fechar();
$novaPorta->abrir();
$novaPorta->fechar();
$novaPorta->abrir();