<!OCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        //CONECTAAO MYSQL 
        require_once(“db.php”);

        //PEGA OS ESTADOS 
        $sql = ”SELECT a.cd_estado, a.nm_estado, a.sg_estado FROM estados a ORDER BY a.dsc_estado”;
        
        //EXECUTA
        A QUERY 
        $sql = mysql_query($sql);
        $row = mysql_num_rows($sql);
        ?>
    </body>
</html>