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
        class Estante{
            //Estante tem N livros
            private $categoria, $livros, $qt, $qtMax;
            public function __construct($categoria, $qtMax){
                $this->categoria = $categoria;
                $livros = array();
                $this->qt = 0;
                $this->qtMax = $qtMax;
            }
            public function colocarLivro($livro){
                if($this->categoria == $livro->getCategoria() 
                && $this->qt < $this->qtMax){
                    $this->livros[] = $livro;
                    $qt++;    
                }
            }
            public function listarLivros(){
                echo "<h1>Estante</h1>";
                echo "<h2>$this->categoria</h2>";
                foreach($this->livros as $livro){
                    $livro->mostrarDados();
                }
            }
        }
        class Livro{
            private $nome, $autor, $categoria;
            public function __construct($nome, $autor, $categoria){
                $this->nome = $nome;
                $this->autor = $autor;
                $this->categoria = $categoria;
            }
            public function mostrarDados(){
                echo "<ul><li>Nome: $this->nome";
                echo "<li>Autor: $this->autor";
                echo "<li>Categoria: $this->categoria</ul>";
            }
            public function getCategoria(){
                return $this->categoria;
            }
        }
        class Categoria{
            const COMEDIA = "Comédia";
            const AUTOAJUDA = "Auto-Ajuda";
            const FILOSOFIA = "Filosofia";
            const FICCAO = "Ficção";
        }

        $livro1 = new Livro("Critica da Razão Pura", "Kant", Categoria::FILOSOFIA);
        $livro2 = new Livro("A Divina Comédia", "Dante Alighieri", Categoria::FICCAO);
        $livro3 = new Livro("Gaia Ciencia", "Nietzsche", Categoria::FILOSOFIA);
        $livro4 = new Livro("O Crepusculo dos Idolos", "Nietzsche", Categoria::FILOSOFIA);
        $livro5 = new Livro("O Capital", "Nietzsche", Categoria::FILOSOFIA);
        $livro6 = new Livro("BLEBLE", "Nietzsche", Categoria::FILOSOFIA);
        $estante1 = new Estante(Categoria::FILOSOFIA, 4);
        $estante1->colocarLivro($livro1);
        $estante1->colocarLivro($livro2);
        $estante1->colocarLivro($livro3);
        $estante1->colocarLivro($livro3);
        $estante1->colocarLivro($livro4);
        $estante1->colocarLivro($livro5);
        $estante1->listarLivros();
        
    ?>
</body>
</html>

