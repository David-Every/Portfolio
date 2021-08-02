<!DOCTYPE html>
<html lang="en">
    <?php
        include "inc/header.php";
    ?>
    <body>        
        <div id ="intro">
            <!-- Image Import -->
            <div class ="title-image"></div>
            <div id="overlay">
                <div id = "title-overlay" >
                    <h1 id ="h1">My name is David Every</h1>
                    <h2 id ="h2" > I'm a web Developer</h2>
                </div>
                    <div class ="scroll">
                        <a href="#main-content">
                            <h3>Scroll Down</h3>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
            </div>
        </div>

        <div id = "b-menu"> 
            <a href="#"> 
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
            </a>
        </div>
        
        <div id ="main-content">
            <div id ="projectWrapper">
                <?php
                 $project = json_decode(file_get_contents("data/project.json"));
                    foreach($project->Project as $pro){
                        echo '<div class = "project">';
                            echo '<div class = "projectLinks">';
                                echo '<a href ="'.$pro->link.'" target = "_blank">';
                                    echo '<img src = "'.$pro->image.'" alt = "'.$pro->altTitle.'">';
                                    echo '<h3>'.$pro->altTitle.'</h3>';
                                    echo '<div class = "projectDescription">';
                                        echo '<p>'.$pro->description.'</p>';
                                    echo '</div>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
                <!-- <div class = "project">
                    <div class ="projectLinks">
                        <a href ="http://netmatters.david-every.netmatters-scs.co.uk" target ="_blank"> 
                            <img src ="imgs/html-reflection.png" alt = "HTML / SCSS Reflection">
                            <h3>HTML / SCSS Reflection</h3>
                            <div class = "projectDescription">
                                <p>
                                    This is the first reflection I did as a Scion for netmatters, where I
                                    had to recreate their landing page for their website as pixel perfect as
                                    possible.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class = "project">
                    <div class ="projectLinks">
                        <a href ="http://pairs.david-every.netmatters-scs.co.uk" target ="_blank"> 
                            <img src ="imgs/pairs-project.png" alt = "Pairs Project">
                            <h3>Quality Builders</h3>
                            <div class = "projectDescription">
                                <p>
                                    This is a pairs project I did with one other Scion where we had to create 
                                    a website from a template given to us.
                                </p>
                            </div>
                        </a>
                        
                    </div>
                    
                </div>

                <div class = "project">
                    <div class ="projectLinks">
                        <a href ="http://img-ify.david-every.netmatters-scs.co.uk/" target ="_blank"> 
                            <img id ="imgify" src ="imgs/img-ify.png" alt = "Img-Ify - A website to link emails to images" target ="_blank">
                            <h3>Img-Ify</h3>
                            <div class = "projectDescription">
                                <p>
                                    This Project is the second Javascript challenge, where I had to link Images with
                                    emails.
                                </p>
                            </div>
                        </a>
                    </div>
                </div> -->

            </div>
        </div>
        <!-- <div id ="bar"></div> -->

        <div id ="contactMe">
            <div class ="contactDetails" >
                <!-- Align left -->
                <h1> Get in touch</h1>
                <p>
                    Feel free to send me a message if you wish to get in contact and i'll get back to you as soon as possible!
                </p>
            </div>
            <div class ="form">
                <!-- firstname --> <!-- Lastname -->
                <span class ="names"> 
                    <input type="text" id ="firstName" name ="firstName" placeholder="First Name">
                    <input type="text" id ="lastName" name ="lastName" placeholder="Last Name">
                </span>

                <input type ="email" id ="email" name ="email" placeholder="Email">
                <input type="text" id ="subject" name ="subject" placeholder = "Subject">
                <textarea id = "message" name ="message" placeholder="Message"></textarea>
                <p id ="msg">Submit</p>
            </div>
           
        </div>
        <div class="scrollUpPosition"> 
            <div class ="scrollup">
                <a href="#">
                    <i class="fas fa-chevron-up"></i>
                    <h3>Scroll up</h3>
                </a>
            </div>
        </div>
       
        <!-- <script src = "/src/JS/app.js"></script> -->
        <script>
            "use strict";
    
            var ie = !(navigator.userAgent.indexOf("rv:11.0") < 0);
            
            if (ie == true){

                var esScript = document.createElement('script');
                esScript.src = "dist/app.es5.min.js";
                document.getElementsByTagName('head')[0].appendChild(esScript);
    
            }else{
                var script = document.createElement('script');
                script.src = "dist/app.es6.min.js";
                document.getElementsByTagName('head')[0].appendChild(script);
                // // Default Script
            }
        </script>

        <!-- <script src = "/dist/app.es6.min.js"></script> -->

    </body>
</html>