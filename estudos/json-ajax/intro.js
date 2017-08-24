$(document).ready(function(){
    //Objeto
    var funcionario = {
        "nome":"Alexandre",
        "telefone":13992072127,
        "profissao":"Desenvolvedor Web"
    }
    //JSON - JavaScript Object Notation
    var funcionarioEmpresa = [
        {
            "nome":"Alexandre",
            "telefone":13992072127,
            "profissao":"Desenvolvedor Web"
        },
        {
            "nome":"Borges",
            "telefone":13993292215,
            "profissao":"Administrador"
        },
        {
            "nome":"Carlos",
            "telefone":13993285511,
            "profissao":"Desenvolvedor Mobile"
        }
    ]
    alert(funcionarioEmpresa[0].nome);
})

//AJAX - Asynchronous JavaScript and XML
