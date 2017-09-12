<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 5</title>
</head>
<body>
    <?php  
        /*
        A classe Aluno tem um e sua referência $curso possui acesso a todos os membros públicos da classe Curso.
        */
        class Curso{
            //Curso tem N alunos
            private $nome, $duracao;
            public function __construct($nome, $duracao){
                $this->nome = $nome;
                $this->duracao = $duracao;
            }
            public function montarDados(){
                //echo json_encode(get_object_vars($this));
                echo "<h2>Curso</h2><ul><li>Nome: $this->nome <li>Duração: $this->duracao</ul>";
            }
            public function getDuracao(){
                return $this->duracao;
            }
    
        }
        class Aluno{
            private $nome, $curso, $completa;
            //A classe curso estará representada na var $curso ou como parâmetro.
            public function __construct($nome, $curso, $chcompleta){
                $this->nome = $nome;
                $this->curso = $curso;
                $this->chcompleta = $chcompleta;
            }
            public function mostrarDados(){
                $this->curso->montarDados();
                echo "<h2>Aluno</h2>";
                echo "<ul><li>Nome: $this->nome";
                echo "<li>Carga Horária Completa: $this->chcompleta";

            }
            public function estaFormado(){
                echo "<li>";
                if($this->chcompleta == $this->curso->getDuracao()){
                    echo "Estado: Aprovado";
                }else{
                    echo "Estado: Cursando";
                }
                echo "</ul>";
            }
        }
        $curso = new Curso("SI", 2800);
        $aluno = new Aluno("Alex", $curso, 1400);
        echo "<h1>Fatec RL</h1>";
        $aluno->mostrarDados();
        $aluno->estaFormado();
    ?>
</body>
</html>