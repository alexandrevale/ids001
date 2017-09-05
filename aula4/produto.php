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
        class Produto{
            private $preco, $vendido;
            public function __construct($preco){
                $this->preco = $preco;
                $this->vendido = false;
            }
            public function aumentarPreco(){
                if (!$this->vendido){
                    $this->preco = 1.1*$this->preco;
                    echo "Preço atual: $this->preco <br>";
                }else{
                    echo "Produto vendido<br>";
                }
            }
            public function vender(){
                $this->vendido = true;
            }
            public function mostrarDados(){
                echo "Estado atual: ".json_encode(get_object_vars($this));
            }
            //Método de exemplo de quebra da regra de negócio
            /*
            public function setPreco($preco){
                $this->preco = $preco;
            }
            */
        }
        $p = new Produto(50);
        $p->aumentarPreco();
        $p->vender();
        $p->aumentarPreco();
        //$p->setPreco(30); //Quebrou a regra de negócio
        $p->mostrarDados();
        
    ?>
</body>
</html>

