function processar(){
    $("#onoff").click(function(){
        function ajaxCall(oper){
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "https://ids001-alexdovale.c9users.io/lista1/ex2/lampada.php", true);        
        xhr.onreadystatechange = function() {
            if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200){
                alert("Conectou!");
                var resp = xhr.responseText;
                //$("#resultado").html = resp;
                document.getElementById("resultado").innerHTML = resp;
            }else{
                alert("Tchau!"); 
            }
        }
        xhr.send();
        }   
    });
}
window.onload = processar;