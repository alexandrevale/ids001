<!DOCTYPE html>
<html>
    <head>
        <title>Conceitos Básicos de Orientação a Objetos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        echo '
        <h1>Conceitos Básicos de Orientação a Objetos</h1>
        
        <h2>Introdução</h2>
        <p>PHP é um interpolador executando no servidor Apache</p>
        <uL>
            <li>Classe: definições de características e comportamentos dos objetos.
            <li>Objetos: instâncias de uma classe, possuirá a forma conforme definido na classe.
            <li>Atributos: características e propriedades do objeto, também definidas na classe.
            <li>Métodos: ações de um objeto, também definidos na classe.
            <li>Estado: valores mutáveis que os atributos possuem em um estante de tempo.
        </ul>
        
        <h2>Exemplo de Classe</h2>';
        class Personagem{
            //Atributos
            public $nome, $raca;    
            //Observação: atributo, diferente de parâmetro, gera estado
            
            //Métodos
            public function guerreiro(){
                echo "<p>$this->nome : Guerreiro <p>";
            }
            public function mostrarRaca(){
                echo "<p>$this->raca : Raça <p>";
            }
            //"this" refere-se a um membro da classe
        }
        //Criando os objetos
        $a = new Personagem();
        $b = new Personagem();
        //Criação de dois personagens diferentes
        
        //Estados
        $a->nome = "Goku";
        $a->raca = "Sayajin";
        
        $b->nome = "Piccolo";
        $b->raca = "Namek";
        
        //Chamando os métodos
        $a->guerreiro();
        $a->mostrarRaca(); 
        
        $b->guerreiro();
        $b->mostrarRaca();
        ?>
    </body>
</html>