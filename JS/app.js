/*
This is going to Populate the Projects section with an image
that flexes into rows. 
and will add additional placeholder images to round to the nearest 4
*/

$('document').ready(function(){
    $("#head").load("/htmlToCopy/htmlToCopy.html");

    /*! Fades in page on load */
    $('body').css('display', 'none');
    $('body').fadeIn(750);
});

// let textDisplay = document.getElementById("h1");

// const title =
// [
//     "My name is David Every ",
//     "i am a web Developer"
// ]
// const append = document.createTextNode("|");

// let i = 0;
// let j = 0;
// let currentPhrase = [];


// function writeTitle(){

//     textDisplay.innerHTML = currentPhrase.join('');
//     if(i < title.length){
//         if(j < title[i].length){
//             currentPhrase.push(title[i][j]);
//             j++;
//         }
//         if(j == title[i].length){
//             i++;
//         }
//     }
//     //If the title has been completed run idle anim
//     if(i == 1){
//         // console.log("i = 1");

//         blink();
//         //get the cursor to blink at the end of the last letter

//     } else{
//         setTimeout(writeTitle,100);

//     }
    
// }

// function blink(){
//     let blink = window.getComputedStyle(textDisplay,'::after');
//     let color = blink.getPropertyValue('color');
//     console.log(color);
//     color.innerHTML.style.color("blue");
//     // setTimeout(remove,300);
// }

// writeTitle();
