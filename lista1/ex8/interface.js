function ajaxCall(){
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "https://ids001-alexdovale.c9users.io/lista1/ex8/advinhe.php");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE &&  xhr.status == 200) {
           var resp = xhr.responseText;
           var div = document.getElementById("resultado");
           div.innerHTML = resp;
        }
    }
    var fd = new FormData();    
    fd.append('n1', document.forms.myForm.n1.value);
    xhr.send(fd);
}
function processar(){
    document.getElementById("resultado").innerHTML = "";
    document.getElementById("btn").onclick = ajaxCall;
}
window.onload = processar;