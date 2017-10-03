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
        class Sapo{
            private $idade=0;
            private static $populacao = 1;
            
            public function __construct(){
                $this->idade = $idade;
                self::$populacao = self::$populacao + 1;
            }
            
            public function getIdade(){
                return $this->idade;
            }
            public function setIdade($idade){
                $this->idade = $idade;
            }
            public static function getPopulacao(){
                return self::$populacao;
            }
        }
        
        $s1 = new Sapo();
        $s2 = new Sapo();
        $s3 = new Sapo();
        $s4 = new Sapo();
        $s5 = new Sapo();
        $s6 = new Sapo();
        $s7 = new Sapo();
        $a = Sapo::getPopulacao();
        $s1->setIdade(20);
        $s2->setIdade(20);
        $s3->setIdade(20);
        echo "<h1> $a </h1>";
        echo $s1->getIdade();
        echo $s2->getIdade();
        echo $s3->getIdade();
   ?> 
</body>
</html>

