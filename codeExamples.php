<!DOCTYPE html>
<?php include "inc/header.php" ?>

<html lang="en">
    <body id ="body"></div>

        <!-- <div id = "b-menu"> 
            <a href="#"> 
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
            </a>
        </div> -->

        <div class ="title-wrapper" > 
            <div class = "title">
                <h1>Coding Examples</h1>
            </div>
        </div>

        <div id ="codeSectionsWrapper">
             <!--When there are multiple examples make them collapseableinto just the title  -->
        <div class = "code-wrapper">
            <h1 class ="collapseTitle">HTML / SCSS Reflection</h1>
            <div class ="content__wrapper">
            <div class ="code">

<!-- Positioned out of align to remove unwanted whitespace in pre I will add this through Javascript  -->
<pre><code>
    @each $name, $color, 
    $hover-colour in $service-colors{
        .nav-#{$name}{
            i{
                color:$color;
            }
            &:hover{
                background-color:$color;
                i{
                    color:$nm-primary;
                }
            }
        }

        .nav-#{$name} .dropdown-content{
            background-color: $hover-colour; 
        }
        .card-nav-#{$name}{
            background-color: $nm-primary;
            .rm-#{$name}{
                background-color: $color; 
                color:$nm-primary;
            }
            .card-icon{
                background-color: $color;
                color:$nm-primary;
            }
            &:hover{
                background-color:$color;
                color:$nm-primary;
                .card-icon{
                    background-color: $nm-primary;
                    color:$color;
                }
                .rm-#{$name}{
                    background-color: $nm-primary;
                    color:$color; 
                }
            }
        }
    }

</pre></code>
<!-- Ending Pre -->
            </div>
            <div class = "explanation"> 
                <p>
                    This code snippet is from the <a href ="http://netmatters.david-every.netmatters-scs.co.uk"> HTML/SCSS Reflection</a>
                    This is a each loop written in SCSS that designates colours for the;
                </p>
                <ul>
                    <li>navigation bar</li>
                    <li>Navigation dropdown</li>
                    <li>Service Cards</li>

                </ul>
                <p>
                    I decided to code it this was as it keeps the SCSS dry.
                    The loop cycles through an array called "service-colors",
                    within which contains class names, default colours and their colours on hover.
                    This particular loop sets the colours to a classname that was defined within HTML and assigns the colours to them.
                    This could also be used to add other variables that would need to be different for each section.

                </p>
            </div>
        </div>


        <!-- Add new HTML here for other code snippets following the below formula -->
        
            <!-- <div class = "code-wrapper">
                <h1 class ="collapseTitle">Placeholder</h1>
                <div class ="content__wrapper">
                </div>
             </div> -->

             <div class = "code-wrapper">
                <h1 class ="collapseTitle">Img-Ify (Javascript Reflection)</h1>
                <div class ="content__wrapper">
                    <div class ="code">
<pre><code> 
    function loadContent(){

        var e =0;
        var l = 1;   
    
        emailInfo.forEach(() => {
            var newdiv = document.createElement("div");
            newdiv.setAttribute("class","linkedEmails");
            var parentdiv = document.getElementById("allEmails");
            parentdiv.appendChild(newdiv);
    
            var h3 = document.createElement("h3");
            var title = document.createTextNode(emailInfo[e][0]);
    
            h3.appendChild(title);
            newdiv.appendChild(h3);
    
            var ul = document.createElement("ul");    
            for (let i = 1; i < emailInfo[e].length; i++) {
                var li = document.createElement("li");
               
                var img = document.createElement("img");
                var imgLink = emailInfo[e][l].toString();
                imgLink = imgLink + WH[3].toString();
                img.src = imgLink;
                
                li.appendChild(img);
                ul.appendChild(li);
                l++;
            }
            newdiv.appendChild(ul);
            l=1;
            e++;
        });
    }

</pre></code>
                    </div>
                    <div class = "explanation">
                        <p>
                            This code snippit is from <a href ="http://img-ify.david-every.netmatters-scs.co.uk/">
                            challenge 2</a> of the javascript reflection.
                            In this task I had to link emails to Images and display that the images
                            were linked with the email addresses.
                        </p>
                        <p>
                            This function cycles through the array named "emailInfo" in a forEach loop to create a
                            div for each element in the array, it then appends the email in an h3 as the sections
                            title.
                            The function then moves on to looking through how many links are stored with the email address,
                            adds on an element from another array (named "WH") to set the width and height and is set to
                            become a string to be used as the html images link to be shown.
                        </p>
                        <p>
                            I chose to write the code in this way to explore how vanilla Javascript can create elements and
                            assign infomation to these elements in a way that each line can be adapted to be used in HTML.
                            Another way i could have gotten the same result would have been to concatenate and interpolate
                            strings with Javascript variables.
                        </p>
                    </div>
                </div>
             </div>



             <div class = "code-wrapper">
                <h1 class ="collapseTitle">Netmatters Javascript Reflection</h1>
                <div class ="content__wrapper">
                    <div class ="code" >

<pre><code>
    function checkSet(){

        if(window.matchMedia('(max-width:1023px)').matches){
            $("#small-additions").css("display","block");
            $ph.css({"width":"100%", "height":"120.06px"});    
        }
        if(window.matchMedia('(min-width:1024px)').matches){    
            $("#small-additions").css("display","none");
            $ph.css({"width":"100%", "height":"210px"});
        }
        if(window.matchMedia('(max-width:766px)').matches){
            $("#hamburger").css({"position":"absolute", "top":"30px","right":"5px"});
        }
        if(window.matchMedia('(min-width:767px)').matches){
            $("#hamburger").css("position","initial");
        }
    }

</pre></code>
                    </div>
                    <div class ="explanation">
                        <p>
                            This function named "checkSet" is attached to an event listener that watches for changes to
                            the browser window being used to view the site, this uses "matchMedia" to check if the window matches any
                            of the stipulations in this function to do many things.
                            At the top "small-additons" will enable in small viewports such as Mobile phones and tablets. This ID adds changes
                            to the Side menu for smaller devices.

                            "$ph" allows there to be a placeholder slot at the top of the site, so that when the animation to show the sites
                            navigation runs the rest of the site remains in their correct place.

                            "#hamburger" changes the positioning of the burger menu button depending on the window size.
                        </p>
                        <p>
                            I decided to use Jquery for this function as jquery allowed me to write the least amount of code i needed to
                            do the same thing.

                            This code could have technically been written in CSS using media queries though this showcases how css can be
                            written within JavaScript / JQuery.
                        </p>
                    </div>
                </div>
                
             </div>

             <div class = "code-wrapper">
                <h1 class ="collapseTitle">SQL Movie Database</h1>
                <div class ="content__wrapper">
                    <div class ="code">
<pre><code> 
    SELECT mov_title AS "Title", mov_year AS "Year Released" FROM movie
    WHERE mov_rel_country LIKE '%UK%'
    AND mov_time >= 120 AND mov_time < 150
    AND mov_lang LIKE '%English%'
    AND mov_year > 1995;
    
</pre></code>
                    </div>
                    <div class ="explanation">
                        <P>
                            The Objective of the Query is to filter the Movies
                            to show which movies in the database were longer then two hours but
                            less then two and a half hours, where the language spoken in the movie
                            is english and the movie was released in the UK after 1995.
                        </P>
                        <div class ="additional_info">
                            <h5>Results of SQL Query</h5>
                            <img src ="imgs/SQL_Data.png" >
                        </div>
                        

                    </div>

                </div>
            </div>

            <div class = "code-wrapper">
                <h1 class ="placeholder">Coming Soon</h1>
                <div class ="content__wrapper">
                </div>

            </div>

             
        </div>
        <!-- <script src = "/dist/app.es6.min.js"></script> -->
        <?php include "inc/footer.php" ?>

    </body>
</html>