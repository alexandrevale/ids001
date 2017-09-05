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
            private static $populacao = 0;
            
            public function __construct(){
                $this->idade = $this->idade + 1;
                self::$populacao = self::$populacao + 1;
            }
            
            public function getIdade(){
                return $this->idade;
            }
            
            public static function getPopulacao(){
                return self::$populacao;
            }
        }
        
        $s1 = new Sapo();
        $s2 = new Sapo();
        $s3 = new Sapo();
        $a = Sapo::getPopulacao();
        echo "<h1> $a </h1>";
        echo $s1->getIdade();
        echo $s2->getIdade();
        echo $s3->getIdade();
   ?> 
</body>
</html>

