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
                echo "<h1>Método teste</h1>";
            }
            private function testePrivado(){
                echo "<h1>Método testePrivado</h1>";
            }
        }
        //Mundo = Qualquer coisa fora da classe
        $obj = new Acesso();
        $obj->a = 7;                    //Acesso de escrita
        echo "<h2>$obj->a</h2>";        //Acesso de leitura
        $obj->teste();                  //Acesso de chamada
        
    ?>
</body>
</html>

