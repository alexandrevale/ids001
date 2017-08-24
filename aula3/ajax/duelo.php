<!DOCTYPE html>
<html>
    <head>
        <title>Duelo</title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <form name="myForm">
            <label for="municao">Munição</label>
            <input type="text" name="municao" id="municao"/>
            <label for="maxima">Máxima</label>
            <input type="text" name="maxima" id="max"/>
            
        </form>
        <button id="bang">Disparar</button>
        <button id="reload">Recarregar</button>
        <p>Resultado: <span id="resultado"></span></p>
        
        <script>
            function events(){
                $('#bang').click(function(){
                    bang();
                });
                $('#reload').click(function(){
                    reload();
                });
                
            }
            function bang(){
                var muni = $('#municao').val();
                var max = $('#max').val();
                var fd = new FormData();
                fd.append('postMuni', muni)
                fd.append('postMax', max)
                console.log(fd)
                $.ajax({
                  type: "POST",
                  url: "https://ids001-alexdovale.c9users.io/aula3/ajax/revolver.php",
                  data: 'teste',
                  success: function(){
                    alert('funcionou, malditinho');
                  }
                });
                
                // $.post('revolver.php', {postMuni: muni, postMax: max},
                // function(info){
                //     //$('#resultado').getatirar(info).html();
                // });
            }

            function reload(){
                var muni = $('#municao').val();
                var max = $('#max').val();               
                $.post('revolver.php', {postMuni: muni, postMax: max},
                function(info){
                    //$('#resultado').getRecarregar().html(info);
                });
            }
            
            window.onload = events()
        </script>
    </body>
</html>