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

if(id = document.getElementById("h1")){
    writeTitle();
}


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