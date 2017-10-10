<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ex1</title>
</head>
<body>
    <?php
        class Sistema{
            private $login, $senha;
            
            public function __construct($login, $senha){
                $this->login = $login;
                $this->senha = $senha;
            }
        
            public function auth(){
                if($this->login == "root" &&
                   $this->senha == "root"){
                    return new Adm();
                }else{
                    return new Comum();
                }
            }
        }
    
        $sist = new Sistema($_GET["login"],$_GET["senha"]);
        $sist->auth()->painel();
    
        abstract class Tag{
            private $v;
            
            public function __construct($v){
                $this->v = $v;
            }
            
            public function innerHtml(){
                echo "TAG GENERICA";
                }
            }
        
            class P extends Tag{
                public function innerHtml(){
                    echo "<p> $v </p>";
                }
            }
            
            class Div extends Tag{
                public function innerHtml(){
                    echo "<div> $v </div>";
                }
            }
            
            class Span extends Tag{
                public function innerHtml(){
                    echo "<span> $v </span>";
                }
            }
        //Como não fazer
        /*
        class AntiTag{
            public static function innerHtml($v, $tipo){
                if($tipo == "P"){
                    echo "<p> $v </p>";
                }
                if($tipo == "Div"){
                    echo "<div> $v </div>";
                }
                if($tipo == "Span"){
                    echo "<span> $v </span>";
                }
            }
        }
        */
    ?>
</body>
</html>