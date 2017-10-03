<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 6</title>
</head>
<body>
    <!--### Exemplo
    Um Cliente divide-se em categorias:
    VIP, Premium e Regular. Em cada cliente, 
    há a necessidade de controle de conta corrente.
    Em uma conta, há dados como nome, e saldo.
    Para cada tipo de conta uma tarifa deve ser 
    calculada: 1% do saldo para Regular, 2% para Premium
    e 4% para VIP. 
    a) Desenhe o diagrama de classes.
    b) Implemente as classes.-->
    <?php
        class Conta{
            private $nome, $saldo;
            public function __construct($nome, $saldo){
                $this->nome = $nome;
                $this->saldo = $saldo;
            }
            public function getNome(){
                return $this->nome;
            }
            public function getSaldo(){
                return $this->saldo;
            }
        }
        class Cliente{
            private $conta;
            //Desta forma indicamos que o parâmetro que será instanciado deverá ser do tipo Conta.
            public function __construct(Conta $conta){
                $this->conta = $conta;
            }
            public function getConta(){
                return $this->conta;
            }
            public function tarifar(){
                $calc = $this->conta->getSaldo();
                echo $calc;
            }            
        }
        class Vip extends Cliente{
            public function __construct(Conta $conta){
                //super(conta);
                parent::__construct($conta); //Executa o construtor da classe pai, no caso Conta.
            }
            // public function tarifarVip(){
            //     $calc = $this->getConta()->getSaldo()*0.96;  
            //     echo $calc;
            // }
            public function tarifar(){
                $calc = $this->getConta()->getSaldo()*0.96;  
                echo $calc;
            }            
        }
        class Premium extends Cliente{
            // public function tarifarPremium(){
            //     $calc = $this->getConta()->getSaldo()*0.98;  
            //     echo $calc;
            // }
            public function tarifar(){
                $calc = $this->getConta()->getSaldo()*0.98;  
                echo $calc;
            }  
        }
        class Regular extends Cliente{
            // public function tarifarRegular(){
            //     $calc = $this->getConta()->getSaldo()*0.99;  
            //     echo $calc;                
            // }
            public function tarifar(){
                $calc = $this->getConta()->getSaldo()*0.99;  
                echo $calc;
            }              
        }        
        class Banco{
            public function executarTarifa(Conta $conta, $tipo){
                //Como melhorar o método:
                //1- Preciso que tarifarRegular, tarifarPremium e
                //tarifarVIP compartilhassem do mesmo nome, solução
                //com sobreescrita
                //2- De alguma forma o método executarTarifa() não
                //deve saber se o cliente é Regular, Vip ou Premium
                if($tipo == "Regular"){
                    $c = new Regular($conta);
                    $c->tarifar(); 
                }elseif($tipo == "Premium"){
                    $c = new Premium($conta);
                    $c->tarifar();                     
                }elseif($tipo == "Vip"){
                    $c = new Vip($conta);
                    $c->tarifar();      
                }elseif($tipo == "Cliente"){
                    $c = new Cliente($conta);
                    $c->tarifar();                      
                }
            }
        }
        //$conta = new Conta("ANA",7800);
        //$cliente = new Premium($conta);
        //$cliente->tarifarPremium();
        $conta = new Conta("ANA",7800);
        $banco = new Banco();
        $banco->executarTarifa($conta,"Cliente");
    ?>
</body>
</html>