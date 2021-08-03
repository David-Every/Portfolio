"use strict";

/*
This is going to Populate the Projects section with an image
that flexes into rows. 
and will add additional placeholder images to round to the nearest 4
*/
$('document').ready(function () {
  $("#head").load("/htmlToCopy/htmlToCopy.html");
  /*! Fades in page on load */

  $('body').css('display', 'none');
  $('body').fadeIn(750);
}); // menu Toggle

var menuOpen = false;
var menu = document.getElementById("b-menu").addEventListener('click', function () {
  var mobMenu = document.getElementById("sidebar__mobile");

  if (!menuOpen) {
    console.log("opening");
    mobMenu.style.display = "block";
    menuOpen = true;
  } else {
    console.log("closing"); // mobMenu.animate({right:})

    mobMenu.style.display = "none";
    menuOpen = false;
  }
}); // let menuOpen = true;
// let $mobMenu = $("sidebar__mobile");
// let $menu = $("b-menu").on('click', () => {
//     if(!menuOpen){
//         menuOpen = true;
//         $mobMenu.css({"display":"none}"});
//     }else{
//         menuOpen = false;
//         $mobMenu.css({"display":"none}"});
//     }
// });
//#region checks screen size and removes menu depending on size.

var x = window.matchMedia("(max-width:767px)");
checkWidth();
window.addEventListener("resize", checkWidth);

function checkWidth() {
  // if(x.matches){
  //     if(document.getElementById("sidebar__mobile")){
  //         return;
  if (x.matches) {
    // if($("#sidebar__mobile"))
    SMenu = document.getElementById("sidebar");
    SMenu.id = "sidebar__mobile";
    SMenu.style.display = "none";
  } else {
    SMenu = document.getElementById("sidebar__mobile");
    SMenu.id = "sidebar";
    SMenu.style.display = "block";
  }
} //#endregion
//#region main page title interaction


var textDisplay = document.getElementById("h1");
var title = ["My name is David Every ", "i am a web Developer"];
var append = document.createTextNode("|");
var i = 0;
var j = 0;
var currentPhrase = [];

function writeTitle() {
  textDisplay.innerHTML = currentPhrase.join('');

  if (i < title.length) {
    if (j < title[i].length) {
      currentPhrase.push(title[i][j]);
      j++;
    }

    if (j == title[i].length) {
      i++;
    }
  } //If the title has been completed run idle anim


  if (i == 1) {
    //get the cursor to blink at the end of the last letter
    blink();
  } else {
    setTimeout(writeTitle, 100);
  }
}

var blinkOn = true;
var styleElem = document.body.appendChild(document.createElement("style"));

function blink() {
  if (blinkOn) {
    styleElem.innerHTML = "#h1:after {color: transparent;}";
    blinkOn = false;
  } else {
    styleElem.innerHTML = "#h1:after {color: white;}";
    blinkOn = true;
  }

  setTimeout(blink, 500);
} //Checks for the id if its not there it dosent try to writeTitle();


if (id = document.getElementById("h1")) {
  writeTitle();
} //|| Coding Examples Collapseable/ Accordian ||\\


var collapse = document.getElementsByClassName('collapseTitle');
var isOpen = false;

for (var _i = 0; _i < collapse.length; _i++) {
  collapse[_i].addEventListener('click', accordian);
} //#endregion
//#region accordian for coding examples


function accordian() {
  var par = this.parentElement.getElementsByClassName('content__wrapper');

  if (isOpen) {
    par[i].style.display = "none";
    isOpen = false;
  } else {
    par[i].style.display = "block";
    isOpen = true;
  }
} //#endregion