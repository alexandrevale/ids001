<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ex2</title>
</head>
<body>
    <?php
        //Essa classe deve ser abstrata, pois o método painel(), neste caso, não faz sentido e depende das subclasses.
        class Usuario{
            public function painel(){
                echo "<h1> PAINEL GENERICO </h1>";
            }
        }

        class Comum extends Usuario{
            public function painel(){
                echo "<h1> 403: FORBIDEN </h1";
            }
        }
        
        class Adm extends Usuario{
            public function painel(){
                echo "<h1> 200: OK </h1";
            }
        }
        
        class Sistema{
            private $login, $senha;
            
            public function __construct ($login, $senha){
                $this->login = $login;
                $this->senha = $senha;
            }
            
            public function auth(){
                if($this->login == "root" && $this->senha == "root")
                    return new Adm();
                else
                    return new Comum();
            }       
        }
        
        $sist = new Sistema($_GET["login"], $_GET["senha"]);
        $sist->auth()->painel();
    ?>
</body>
</html>