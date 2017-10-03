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
1) Crie a classe Biblioteca que possui nome e varias Estantes. Faça os métodos:

0) inserirEstante($estante): Insere uma Estante  

a) listarFilosofia(): Lista todos os livros de filosofia

b) listarTudo(): Lista todos os livros de todas as estantes

c) contarFiccao(): Conta quantos livros há de ficcao*/
        class Biblioteca{
            private $nome, $estantes;
            public function __construct($nome){
                $this->nome = $nome;
                $this->estantes = array();
            }
            public function inserirEstante($estante){
                if(isset($estante)){
                    $this->estantes[] = $estante;    
                }               
            }
            public function listarFilosofia(){
                foreach($this->estantes as $e){
                    if($e->getCategoria() == Categoria::FILOSOFIA){
                        $e->listarLivros();
                    }
                }
            }
            public function listarTudo(){
                foreach($this->estantes as $e){
                    $e->listarLivros();
                }
            }
            public function contarFiccao(){
                foreach($this->estantes as $e){
                    if($e->getCategoria() == Categoria::FICCAO){
                        echo "<h3>Quantidade: ".$e->getQuantidade()."<h3>";
                    }
                }
            }
        }
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
                    $this->qt++;    
                }
            }
            public function listarLivros(){
                echo "<h1>Estante: $this->categoria</h1>";
                foreach($this->livros as $livro){
                    $livro->mostrarDados();
                }
            }
            public function getQuantidade(){
                return $this->qt;
            }
            public function getCategoria(){
                return $this->categoria;
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
        $estante2 = new Estante(Categoria::FICCAO, 8);
        $estante1->colocarLivro($livro1);
        $estante2->colocarLivro($livro2);
        $estante1->colocarLivro($livro3);
        $estante1->colocarLivro($livro4);
        $estante1->colocarLivro($livro5);
        $estante1->colocarLivro($livro6);
        $estante1->listarLivros();
        echo "<h1>Biblioteca</h1>";
        $b1 = new Biblioteca("Minha Biblioteca");
        $b1->inserirEstante($estante1);
        $b1->inserirEstante($estante2);
        $b1->listarFilosofia();
        $b1->listarTudo();
        $b1->contarFiccao();
    ?>
</body>
</html>

