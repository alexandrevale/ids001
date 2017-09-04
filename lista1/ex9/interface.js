function ajaxCall(){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "https://ids001-alexdovale.c9users.io/lista1/ex9/Eq2Grau.php");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
           var resp = xhr.responseText;
           var div = document.getElementById("resultado");
           div.innerHTML = resp;
        }
    }
    var fd = new FormData();    
    fd.append( 'a', document.forms.myForm.a.value );
    fd.append( 'b', document.forms.myForm.b.value );
    fd.append( 'c', document.forms.myForm.c.value );
    
    xhr.send(fd);
}
function processar(){
    document.getElementById("resultado").innerHTML = "";
    document.getElementById("btn").onclick = ajaxCall;
}
window.onload = processar;