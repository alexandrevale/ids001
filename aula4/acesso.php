<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 4</title>
</head>
<body>
    <?php    
        class Acesso{
            public $a;
            private $b; //Uma boa prática é utilizar atributo privado
            public function teste(){
                $this->b = 5;
                echo "<h1>Método teste</h1>";
                echo "<h2>$this->b</h2>";
            }
            //Geralmente método privado é atribuido à rotinas internas. Exemplo: calcular o delta
            private function testePrivado(){
                echo "<h1>Método testePrivado</h1>";
            }
            public function getB(){
                return $this->b;
            }
            public function setB($b){
                $this->b = 10;
                echo "<h3>Método teste set</h3>";
                echo "<em>$this->b</em>";
            }
        }
        $obj1 = new Acesso();
        $obj1->a = 7;                    //Acesso de escrita
        echo $obj1->a;        //Acesso de leitura
        $obj1->teste();                  //Acesso de chamada
        $obj2 = new Acesso();
        $a = $obj2->getB();
        echo "$a";
    ?>
</body>
</html>