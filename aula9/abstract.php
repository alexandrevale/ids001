<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes Abstratas</title>
</head>
<body>
    <?php
        /*
        São classes que representam uma entidade ao qual não é possível
        saber, à priori, como serão implementados seus métodos.
        
        Em classes abstratas podemos ter métodos abstratos.
        Podem ter métodos concretos, atributos e, também, não são
        instanciáveis.
        
        Método abstrato é quando um método não possui um corpo de código, 
        sempre espera uma sobrescrita, logo, é obrigatória.
        
        São usados quando um método possui uma implementação que dependa de
        suas subclasses e se a implementação desta, em uma classe superior,
        não faz sentido.
        
        */
        //No exercício 2 da P1:
        
        abstract class Usuario{
            abstract public function painel(){
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