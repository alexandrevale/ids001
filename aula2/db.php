<!OCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        //Conexão mysql_connect('localhost', 'mysql_user', 'mysql_password');
        $conn = mysql_connect("localhost", "alexdovale", "") or die("Erro na conexão com o banco de dados");
        
        //Seleciona o banco de dados
        $db = mysql_select_db("brasil", $conn) or die("Erro na seleção do banco de dados");
        ?>
    </body>
</html>