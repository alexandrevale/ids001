$(document).ready(function(){
    $('#area').click(function(){
        var lado = $('#lado').val();
        var tipo;
      //form data
      var fd = new FormData();
       
      fd.append('area', area);
       
      $.ajax({
        url: 'https://ids001-alexdovale.c9users.io/aula3/ex2/quadrado.php',
        method: 'POST',
        data: fd,
        processData: false,
        contentType: false,
          success: function(data){
              $('#resultadoArea').html(data);
          }
       });
    });
});