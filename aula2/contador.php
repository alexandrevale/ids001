<!DOCTYPE html>
<html>
    <head>
        <title>Contador</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            //Classe
            class Contador{
                //Atributos
                public $qtPessoas;
                //Métodos
                public function incrementar(){
                    $this->qtPessoas = $this->qtPessoas + 1;
                }
                public function decrementar(){
                    $this->qtPessoas = $this->qtPessoas - 1;
                }
                public function zerar(){
                    $this->qtPessoas = 0;
                }
                public function mostrar(){
                    echo"<h1>Número de pessoas: $this->qtPessoas</h1>";
                }
            }
            $k = new Contador();
            $c = new Contador();
            $k->zerar();
            $c->zerar();
            $k->incrementar();
            $k->incrementar();
            $k->incrementar();
            $c->incrementar();
            $k->decrementar();
            //Atenção com as boas práticas!
            //$k->inventado = 5;
            
            //print_r exibe informação sobre uma variável de forma legível 
            //print_r ($k);
            //print_r ($c);
            $c->mostrar();
            $k->mostar();
        ?>
    </body>
</html>