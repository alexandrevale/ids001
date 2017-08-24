<!OCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $conn = mysql_connect("localhost", "alexdovale", "", "brasil") or die("Erro na conexão com o banco de dados");    
            $selecionaEstado = "SELECT * FROM estados ORDER BY nm_estado ASC";
            $resultado = mysqli($conn, $selecionaEstado);
        ?>
        <select name="estados" id="estados">
            <option value="Selecione um estado"></option>
            <?php
                while($row = mysqli_fetch_array($resultado)){
                    echo "<option value=".$row["nm_estado"].">".$row["nm_estado"]."</option>";
                }
            ?>
        </select>
        <button type="button" name="pesquisar" id="pesquisar">Pesquisar</button>
        <div style="display:none">
            <select name="cidades" id="cidades">
                <option value="Selecione uma cidade"></option>
            </select>
        </div>
    </body>
</html>