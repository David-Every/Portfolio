/*
This is going to Populate the Projects section with an image
that flexes into rows. 
and will add additional placeholder images to round to the nearest 4
*/

$('document').ready(function(){
    // $("#head").load("/htmlToCopy/htmlToCopy.html");

    /*! Fades in page on load */
    $('body').css('display', 'none');
    $('body').fadeIn(750);
});


// menu Toggle
let menuOpen = false;
let menu = document.getElementById("b-menu").addEventListener('click', function () {
    let mobMenu = document.getElementById("sidebar__mobile");
    if(!menuOpen){
        console.log("opening");
        mobMenu.style.display = "block";
        menuOpen = true;
    }else{
        console.log("closing");
        // mobMenu.animate({right:})
        mobMenu.style.display = "none";
        menuOpen = false;
    }
});

let menuOpen = true;
let $mobMenu = $("sidebar__mobile");

let $menu = $("b-menu").on('click', () => {
    if(!menuOpen){
        menuOpen = true;
        $mobMenu.css({"display":"none}"});
    }else{
        menuOpen = false;
        $mobMenu.css({"display":"none}"});
    }
});

//#region checks screen size and removes menu depending on size.

let x = window.matchMedia("(max-width:767px)");
checkWidth();
window.addEventListener("resize",checkWidth);


function checkWidth(){
    // if(x.matches){
    //     if(document.getElementById("sidebar__mobile")){
    //         return;

    if(x.matches){
        // if($("#sidebar__mobile"))
        SMenu = document.getElementById("sidebar");
        SMenu.id ="sidebar__mobile";
        SMenu.style.display="none";
    }else{
        SMenu = document.getElementById("sidebar__mobile");
        SMenu.id ="sidebar"
        SMenu.style.display="block";
    }
}

//#endregion

//#region main page title interaction
let textDisplay = document.getElementById("h1");

const title =
[
    "My name is David Every ",
    "i am a web Developer"
]
const append = document.createTextNode("|");

let i = 0;
let j = 0;
let currentPhrase = [];


function writeTitle(){

    textDisplay.innerHTML = currentPhrase.join('');
    if(i < title.length){
        if(j < title[i].length){
            currentPhrase.push(title[i][j]);
            j++;
        }
        if(j == title[i].length){
            i++;
        }
    }
    //If the title has been completed run idle anim
    if(i == 1){
         //get the cursor to blink at the end of the last letter
        blink();
    } else{
        setTimeout(writeTitle,100);
    }
}
let blinkOn = true;
var styleElem = document.body.appendChild(document.createElement("style"));


function blink(){
    
    if(blinkOn){
        styleElem.innerHTML = "#h1:after {color: transparent;}";
        blinkOn = false;
    }else{
        styleElem.innerHTML = "#h1:after {color: white;}";
        blinkOn = true;
    }
    setTimeout(blink,500);
}

//Checks for the id if its not there it dosent try to writeTitle();
if(id = document.getElementById("h1")){
    writeTitle();
}



//#endregion


//#region accordian for coding examples

//|| Coding Examples Collapseable/ Accordian ||\\

let collapse = document.getElementsByClassName('collapseTitle');

let isOpen = false;
for(let i = 0; i < collapse.length; i++){
    collapse[i].addEventListener('click',accordian);
}

function accordian(){
    let par = this.parentElement.getElementsByClassName('content__wrapper');

    if(isOpen){
        par[i].style.display ="none";
        isOpen = false;
    }else{
        par[i].style.display ="block";
        isOpen = true;
    }
}
//#endregion
