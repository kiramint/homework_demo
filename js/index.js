window.onload = function () {
    displayTime();
    carousel.autoNext();
}
// Carousel function start
let carousel= Object();
carousel.counter=1;
carousel.ButOnC=0; //stop auto next when clicks
carousel.nextOc=function (){
    carousel.ButOnC=1;
    carousel.next();
}
carousel.prevOc=function (){
    carousel.ButOnC=1;
    carousel.prev();
}

carousel.next=function (){
    document.querySelector("#control-"+carousel.counter).removeAttribute("checked");
    // console.log(carousel.counter);
    if(carousel.counter===3){
        carousel.counter=1;
    }else {
        carousel.counter+=1;
    }
    document.querySelector("#control-"+carousel.counter).setAttribute("checked","");
    // console.log(carousel.counter);
}
carousel.prev=function (){
    document.querySelector("#control-"+carousel.counter).removeAttribute("checked");
    // console.log(carousel.counter);
    if(carousel.counter===1){
        carousel.counter=3;
    }else {
        carousel.counter-=1;
    }
    document.querySelector("#control-"+carousel.counter).setAttribute("checked","");
    // console.log(carousel.counter);
}
carousel.autoNext=function (){
    if(carousel.ButOnC){
        carousel.ButOnC=0; //stop auto next when clicks
        setTimeout(carousel.autoNext,6000);
    }else{
        carousel.next();
        setTimeout(carousel.autoNext,3000);
    }

}
// Carousel function stop
// Pop window function start
function popwind() {
    let popBak = document.querySelector('#pop-bak');
    popBak.setAttribute("style", "display: block;");
    let popWnd = document.querySelector('#pop-wnd');
    popWnd.setAttribute("style", "display: block;");
    return 0;
}
function popwindnormal() {
    let popBak = document.querySelector('#pop-bak');
    popBak.setAttribute("style", "display: block;");
    let popWnd = document.querySelector('#pop-normal');
    popWnd.setAttribute("style", "display: block;");
    return 0;
}
function clswind() {
    let popBak = document.querySelector('#pop-bak');
    popBak.setAttribute("style", "display: none;");
    let popWnd = document.querySelector('#pop-wnd');
    popWnd.setAttribute("style", "display: none;");
    return 0;
}
function clswindnormal() {
    let popBak = document.querySelector('#pop-bak');
    popBak.setAttribute("style", "display: none;");
    let popWnd = document.querySelector('#pop-normal');
    popWnd.setAttribute("style", "display: none;");
    return 0;
}
// Pop window function stop
// Buttons
function card1OC() {
    popwindnormal();
    return 0;
}
function card2OC() {
    popwindnormal();
    return 0;
}
function card3OC() {
    popwindnormal();
    return 0;
}
function card4OC() {
    popwindnormal();
    return 0;
}
function arti1OC() {
    popwindnormal();
    return 0;
}
function arti2OC() {
    popwindnormal();
    return 0;
}
function arti3OC() {
    popwindnormal();
    return 0;
}
function arti4OC() {
    popwindnormal();
    return 0;
}
function arti5OC() {
    popwindnormal();
    return 0;
}
function arti6OC() {
    popwindnormal();
    return 0;
}
//Click and jump stop