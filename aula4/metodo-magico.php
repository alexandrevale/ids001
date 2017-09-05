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
        class Foo{
            //Get e Set que vale para todos
            private $a, $b, $c;
            public function ola(){
                echo "<h1>Oi</h1><br>";
            }
            public function mostrar(){
                echo json_encode(get_object_vars($this));
            }            
            public function __set($atributo, $valor){
                $this->$atributo = $valor;
            }
            public function __get($atributo){
                return $this->$atributo;
            }
        }
        //Variáveis variaveis
        $x = "teste";
        $teste = 5;
        echo $$x;
        //Outro exemplo
        /*
        $clazz = "Foo";
        $f = new $clazz();
        $met = "ola";
        $f->$met();
        */
        //Esse processo só é permitido no PHP porque não há compilação na execução
        $f = new Foo();
        $f->__set("c",9);
        $f->__set("b",4);
        $f->mostrar();
        echo $f->__get("b");
    ?>
</body>
</html>

