window.onload = function () {
    resizeDocblock();
    displayTime();
    hljs.highlightAll();
}
let demoDocument=null;
function demoDoc(){
    document.querySelector("#text-area").value=demoDocument;
    viewArticle();
}
function clearDoc(){
    document.querySelector("#text-area").value="";
    viewArticle();
}
function resizeDocblock() {
    let height = window.innerHeight - 330;
    console.log(height);
    document.querySelector("#editor-block").style.height = height + "px";
    document.querySelector("#editor-block").style.display = "flex";
}
function postSubmit() {
    const form = document.querySelector("#form");
    const temp = document.createElement("form");
    temp.action = "getarticle.php";
    temp.method = "post";
    temp.style.display = "none";
    let request = document.createElement("textarea");
    request.name="article";
    request.value=document.querySelector("#text-area").value;
    temp.appendChild(request);
    form.appendChild(temp);
    temp.submit();
    return temp;
}