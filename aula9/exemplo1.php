<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo de Classes Abstratas</title>
</head>
<body>
    <?php
        abstract class Animal{
            private $nome;
            
            public function __construct($nome){
                $this->nome = $nome;
            }
            public function getNome(){
                return $this->nome;
            }
            abstract public function emitirSom();
        }
        class Cachorro extends Animal{
            public function emitirSom(){
                echo "<h1>ROOF ROOF</h1>";
            }
        }
        class Gato extends Animal{
            public function emitirSom(){
                echo "<h1>MIAU</h1>";
            }
        }        
    /*
        Não podemos instanciar classes abstratas, consequentemente, chamar o método emitirSom()
        $a = new Animal("????");
        $a->emitirSom();
     */
        $doggo = new Cachorro("Doggo");
        $doggo->emitirSom();
        $blue = new Gato("Blue");
        $blue->emitirSom();
    ?>
</body>
</html>