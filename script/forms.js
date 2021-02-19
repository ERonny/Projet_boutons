var body=document.querySelector("body");
setInterval(setSize, 1);
body.style.display ="flex";
body.style.justifyContent="center";
body.style.alignItems="center";
function setSize (){
var aicha =window.innerHeight;
body.style.height= aicha+"px";
}