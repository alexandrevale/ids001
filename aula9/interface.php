<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interface - Conceito e Exemplo</title>
</head>
<body>
    <?php
    /*
        São um conjunto de assinaturas de métodos (métodos abstratos) e constantes.
        Constantes => não há atributos
        
        É utilizada quando não possui atributos. 
        Caso possuir, utilizar classe abstrata.
        
        USO DO COMBO: Sobrescrita + Abstração + Polimorfismo
        
        A abstração criou uma "forma" mínima para se mexer com animais checavéis,
        a sobrescita deu um jeito de manipular um checar para todos os animais
        (o método chamado depende da instância e não do nome), e
        o polimorfismo perimitiu com que o método checar do Zoo aceitasse
        APENAS animais checáveis.        
    */
        interface Checavel{
            function checar();
        }
        interface Animal{
            const nome = "----";
            public function emitirSom();
        }
            
        interface Pulavel{
            function pular();
        }
            
        class Cachorro implements Animal, Checavel{
            public function emitirSom(){
                echo "<h1> Roof Roof </h1>";
            }
            public function checar(){
                echo "<h1> É um cachorro </h1>";
            }            
        }
        class Gato implements Animal, Checavel{
            public function emitirSom(){
                echo "<h1> MIAU </h1>";
            }
        
            public function pular(){
                echo "<h1> Pulou como gato... </h1>";
            }
            public function checar(){
                echo "<h1> É um gato </h1>";
            }
        }
        
    //Modelo errado da aplicação:
    /*
        class Zoo{
            //Imitação do polimorfismo
            public function checarAnimal(Animal $animal){
                if ($animal instanceof Gato){
                    echo "É um gato";
                }
                if ($animal instanceof Cachorro){
                    echo "É um cachorro";
                }
                //Seria necessário criar N if conforme N quantidade de animais
            }
        }
    */
        class Zoo{
            public function checar(Checavel $animal){
                $animal->checar();
            }
        }
        
        $doggo = new Cachorro("???");
        //O METODO emitirSom sera escolhido baseado em qual instancia foi provida.
        $doggo->emitirSom();
        $blue = new Gato("???");
        $blue->pular();
        $z = new Zoo();
        $z->checar($blue);
    ?>
</body>
</html>