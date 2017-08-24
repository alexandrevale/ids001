
<?php
    /*
    ~Exercício~
    Um revolver possui uma quantidade máxima de
    munição. Ele pode atirar, uma bala por vez, ou
    recarregar, uma por vez. Um revolver só atira
    se houver munição e recarrega se a quantidade
    de munição não for a máxima.
    Implemente esta situação.
    */
    //
            
    //Classe
    class Revolver{
        //Atributos
        public $qtMuni, $qtMax;
        //Métodos
        public function __construct($qtMuni, $qtMax){
            $this->qtMuni = $qtMuni;
            $this->qtMax = $qtMax;
        }
        public function atirar(){
            if($this->qtMuni == 0){
                echo"Sua arma esta sem munição, recarregue! | Munição: $this->qtMuni <br>";
            }else{
                echo"BANG! | Munição: $this->qtMuni <br>";
                $this->qtMuni = $this->qtMuni - 1;
            }
        }
        public function recarregar(){
            if($this->qtMuni < $this->qtMax){
                $this->qtMuni = $this->qtMuni + 1;
                echo"Recarregado em 1 bala. Você ainda tem: $this->qtMuni <br>";
            }else{
                echo"Seu revolver esta totalmente carregado. | Munição: $this->qtMuni <br>";
            }
        }
    }
    $pistola = new Revolver($_POST["postMuni"], $_POST["postMax"]);

?>