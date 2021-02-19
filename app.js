var mainDiv = document.getElementById("mainDiv");
var nav = document.querySelector("nav");
var page = document.getElementById("page");

var homeBtn = document.getElementById("home");
var listBtn = document.getElementById("list");
var addBtn = document.getElementById("add");
//var trashBtn = document.getElementById("trash");

setInterval(sizeSet, 1);
function sizeSet() {
     var useHeight = window.innerHeight - 3;
     mainDiv.style.height = ("height", useHeight + "px");
}

homeBtn.setAttribute("class", "activeItem");
homeBtn.setAttribute("disabled", "");

listBtn.setAttribute("class", "navItem");
listBtn.removeAttribute("disabled", "");

addBtn.setAttribute("class", "navItem");
addBtn.removeAttribute("disabled", "");

page.setAttribute("src", "pages/home.php");
function menuSelect(id) {
     switch (id) {
          case "home":
               {
                    homeBtn.setAttribute("class", "activeItem");
                    homeBtn.setAttribute("disabled", "");

                    listBtn.setAttribute("class", "navItem");
                    listBtn.removeAttribute("disabled", "");

                    addBtn.setAttribute("class", "navItem");
                    addBtn.removeAttribute("disabled", "");
                    /*addBtn.setAttribute("class", "navItem");
                    addBtn.removeAttribute("disabled", "");*/

                    page.setAttribute("src", "pages/home.php");
               }
               break;

          case "list":
               {
                    homeBtn.setAttribute("class", "navItem");
                    homeBtn.removeAttribute("disabled", "");

                    listBtn.setAttribute("class", "activeItem");
                    listBtn.setAttribute("disabled", "");

                    addBtn.setAttribute("class", "navItem");
                    addBtn.removeAttribute("disabled", "");

                    /*trashBtn.setAttribute("class", "navItem");
                    trashBtn.removeAttribute("disabled", "");*/
                    page.setAttribute("src", "listes.php");
               }
               break;

          case "add":
               {
                    homeBtn.setAttribute("class", "navItem");
                    homeBtn.removeAttribute("disabled", "");

                    listBtn.setAttribute("class", "navItem");
                    listBtn.removeAttribute("disabled", "");

                    addBtn.setAttribute("class", "activeItem");
                    addBtn.setAttribute("disabled", "");

                    /*trashBtn.setAttribute("class", "navItem");
                    trashBtn.removeAttribute("disabled", "");  */  
                    page.setAttribute("src", "forms.php");
               }
               break;
/*
          case "trash":
               {
                    homeBtn.setAttribute("class", "navItem");
                    homeBtn.removeAttribute("disabled", "");

                    listBtn.setAttribute("class", "navItem");
                    listBtn.removeAttribute("disabled", "");

                    addBtn.setAttribute("class", "navItem");
                    addBtn.removeAttribute("disabled", "");

                   /* trashBtn.setAttribute("class", "activeItem");
                    trashBtn.setAttribute("disabled", "");
               }
               break;*/
     }
}

homeBtn.addEventListener(
     "click",
     function () {
          menuSelect("home");
     },
     false
);
listBtn.addEventListener(
     "click",
     function () {
          menuSelect("list");
     },
     false
);
addBtn.addEventListener(
     "click",
     function () {
          menuSelect("add");
     },
     false
);
/*
trashBtn.addEventListener(
     "click",
     function () {
          menuSelect("trash");
     },
     false
);*/
