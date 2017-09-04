<?php
/*Exercício 1.7. Implemente a classe Cliente que contenha os atributos:
nome, cpf (Strings) e telefone (Telefone). E que contenha os métodos:
mostrarDados() e adicionarTelefone(), o primeiro deve mostrar todos
os dados do cliente, incluindo o telefone e o último deve associar um
novo telefone ao cliente. Implemente a classe Telefone que possua os
atributos: ddd e número (Strings) e os métodos: obterNumero() e obterDDD().*/
class Cliente{
    public $nome, $cpf, $telefone;
    public function __construct($nome, $cpf, $telefone){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }
    public function mostrarDados(){
        $this->obterNumero();
        echo "Nome: $this->nome";
        echo "CPF: $this->cpf";
        $this->telefone = "$this->ddd $this->numero";
        echo "Telefone: $this->telefone";
    }
    public function adicionarTelefone(){
        
        $this->numero = $numero;
        $this->ddd = $ddd;
    }
}
include_once "telefone.php";
$cadastro = new Cliente("", 0, 0);
$cadastro->nome = ($_POST["nome"]);
$cadastro->cpf = ($_POST["cpf"]);
$cadastro->ddd = ($_POST["ddd"]);
$cadastro->numero = ($_POST["numero"]);
$tentativa->mostrarDados();