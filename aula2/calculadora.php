<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            //Classe
            class Calculadora{
                //Atributos
                public $n1, $n2;
                //Métodos
                public function somar(){
                    $resultado = $this->n1 + $this->n2;
                    echo"Resultado = $resultado <br>";
                }
                public function subtrair(){
                    $resultado = $this->n1 - $this->n2;
                    echo"Resultado = $resultado <br>";
                }
                public function multiplicar(){
                    $resultado = $this->n1 * $this->n2;
                    echo"Resultado = $resultado <br>";
                }
                public function divisao(){
                    if($this->n2 != 0){
                        $resultado = $this->n1 / $this->n2;
                        echo"Resultado = $resultado";    
                    }else{
                        echo"Não é possível calcular.";
                    }
                }
            }
            $calc = new Calculadora();
            $calc->somar(1,2);
            //$calc->subtrair(1,2);
            //$calc->multiplicar(1,2);
            //$calc->divisao(2,1);
        ?>
    </body>
</html>