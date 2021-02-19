var body=document.querySelector("body");
setInterval(setSize, 1);
body.style.display="flex";
body.style.justifyContent="space-around";
body.style.alignItems="center";
body.style.flexWrap="wrap"
function setSize (){
    var aicha =window.innerHeight;
    body.style.height= aicha+"px";
}