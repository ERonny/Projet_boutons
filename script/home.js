var body = document.querySelector("body");


setInterval(sizeSet, 1);
function sizeSet() {
     var useHeight = window.innerHeight - 20;
     body.style.height = ("height", useHeight + "px");
     console.log("fontion de redimensionement");
}


var totNumb = document.getElementById("totNumb");
var totManNumb = document.getElementById("totManNumb");
var totWomNumb = document.getElementById("totWomNumb");

var totManNumbImg = document.getElementById("totManNumbImg");
var totWomNumbImg = document.getElementById("totWomNumbImg");

function setImgWidthTot (gender){
        switch(gender){
            case "man":{
                        var num = Number(totNumb.innerHTML);
                        var man = Number(totManNumb.innerHTML);
                        var value = man/num*100;
                        totManNumbImg.style.width = value + "%";
                     }
            case "wom":{
                        var num = Number(totNumb.innerHTML);
                        var wom = Number(totWomNumb.innerHTML);
                        var value = wom/num*100;
                        totWomNumbImg.style.width = value + "%";
                     }
        }
}


setImgWidthTot("man");
setImgWidthTot("wom");

var devNumb = document.getElementById("devNumb");
var devManNumb = document.getElementById("devManNumb");
var devWomNumb = document.getElementById("devWomNumb");

var devManNumbImg = document.getElementById("devManNumbImg");
var devWomNumbImg = document.getElementById("devWomNumbImg");

function setImgWidthDev (gender){
        switch(gender){
            case "man":{
                        var num = Number(devNumb.innerHTML);
                        var man = Number(devManNumb.innerHTML);
                        var value = man/num*100;
                        devManNumbImg.style.width = value + "%";
                     }
            case "wom":{
                        var num = Number(devNumb.innerHTML);
                        var wom = Number(devWomNumb.innerHTML);
                        var value = wom/num*100;
                        devWomNumbImg.style.width = value + "%";
                     }
        }
}

setImgWidthDev("man");
setImgWidthDev("wom");

var refNumb = document.getElementById("refNumb");
var refManNumb = document.getElementById("refManNumb");
var refWomNumb = document.getElementById("refWomNumb");

var refManNumbImg = document.getElementById("refManNumbImg");
var refWomNumbImg = document.getElementById("refWomNumbImg");

function setImgWidthRef (gender){
        switch(gender){
            case "man":{
                        var num = Number(refNumb.innerHTML);
                        var man = Number(refManNumb.innerHTML);
                        var value = man/num*100;
                        refManNumbImg.style.width = value + "%";
                     }
            case "wom":{
                        var num = Number(refNumb.innerHTML);
                        var wom = Number(refWomNumb.innerHTML);
                        var value = wom/num*100;
                        refWomNumbImg.style.width = value + "%";
                     }
        }
}

setImgWidthRef("man");
setImgWidthRef("wom");