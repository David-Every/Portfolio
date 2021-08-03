<!DOCTYPE html>
<html lang="en">
    <?php
    $page ="Portfolio";
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

        <!-- <div id = "b-menu"> 
            <a href="#"> 
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
            </a>
        </div> -->
        
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
        <?php include "inc/footer.php" ?>

        <!-- <script src = "/dist/app.es6.min.js"></script> -->

    </body>
</html>