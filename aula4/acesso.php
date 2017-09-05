<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 4</title>
</head>
<body>
    <?php    
        class acesso{
            public $a;
            private $b;
            public function teste(){
                $this->b = 5;
                echo "<h1>Método teste</h1>";
                echo "<h2>$this->b</h2>";
            }
            //Geralmente método privado é atribuido à rotinas internas. Exemplo: calcular o delta.
            private function testePrivado(){
                echo "<h1>Método testePrivado</h1>";
            }
        }
        $obj1 = new Acesso();
        $obj1->a = 7;                    //Acesso de escrita
        echo "<h2>$obj1->a</h2>";        //Acesso de leitura
        $obj1->teste();                  //Acesso de chamada
    ?>
</body>
</html>

