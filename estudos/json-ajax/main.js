window.onload = function(){
  var arquivo = 1;
  var container = document.getElementById("div-info");
  var btn = document.getElementById('pesquisar');
  btn.addEventListener('click', function(){
    //Iniciando a requisição
    var request = new XMLHttpRequest();
    //Abre o pedido do tipo GET
    request.open('GET', 'https://ids001-alexdovale.c9users.io/estudos/json-ajax/animais'+arquivo+'.js');
    
    request.onload = function(){
      //Teste de conexão
      //console.log(request.responseText);
      var info = JSON.parse(request.responseText);
      montar(info);
    };
    request.send(); 
    arquivo++;
    
    //Verificando o botão
    btn.html("Pesquisar "+arquivo);
    if (arquivo > 3){
      btn.css("display", none);
    }
  });
  
  //Função que monta o HTML na página
  function montar(data){
    var htmlString = "";
    for(i = 0; i < data.length; i++){
      htmlString += "<p>"+data[i].name+" é um "+data[i].species+" que adora comer ";
      for(j = 0; j < data[i].foods.likes.length; j++){
        if(j == 0){
          htmlString += data[i].foods.likes[j];
        }else{
          htmlString =+ " e " + data[i].foods.likes[j];
        }
      htmlString += "</p>"
      }
      container.insertAdjacentHTML('beforeend', htmlString);
    }
  }
}