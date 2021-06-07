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

var menuOpen = true;
var menu = document.getElementById("b-menu").addEventListener('click', function () {
  var mobMenu = document.getElementById("sidebar__mobile");

  if (menuOpen) {
    mobMenu.style.display = "none";
    menuOpen = false; // burgerbar = document.getElementsByClassName("burger-line");
    // burgerbar.style.display ="block;"
  } else {
    mobMenu.style.display = "block";
    menuOpen = true; // burgerbar = document.getElementsByClassName("burger-line");
    // burgerbar.style.display ="none;"
  }
}); //change menu type
//need a way to debug this if it changes responsively

var x = window.matchMedia("(max-width:767px)"); // checkWidth();

window.addEventListener("resize", checkWidth); // var SMenu = document.getElementById("sidebar");

function checkWidth() {
  // console.log(`id at start = ${SMenu.id}`);
  if (x.matches) {
    // console.log("its less than")
    if (document.getElementById("sidebar__mobile")) {
      return;
    } else {
      SMenu = document.getElementById("sidebar");
      SMenu.id = "sidebar__mobile";
      SMenu.style.display = "none";
      menuOpen = false; //sidebar__mobile.style.display = "none";
      // console.log(`id = ${menu.id}`);
    }
  } else {
    // console.log("its greater than")
    if (document.getElementById("sidebar")) {
      return;
    } else {
      SMenu = document.getElementById("sidebar__mobile");
      SMenu.id = "sidebar";
      SMenu.style.display = "block";
    }
  } // console.log(`id at end = ${SMenu.id}`);

} // END menu Toggle


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
}

function accordian() {
  var par = this.parentElement.getElementsByClassName('content__wrapper');

  if (isOpen) {
    par[i].style.display = "none";
    isOpen = false;
  } else {
    par[i].style.display = "block";
    isOpen = true;
  }
}