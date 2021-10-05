<!DOCTYPE html>
<html lang="en">
    <?php
    $page ="Portfolio";
        include "inc/header.php";
        include "inc/JS.php";
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
        
        <div id ="main-content">
            <?php
                // $projectType = "Web Development Projects";
                // echo '<h3 class ="projectType">'.$projectType.'</h3>';
                $videos = array("BlockBreaker","LaserDefender","Glitch","TileVania");
            ?>
            <div id ="projectWrapper">
                <?php
                /**
                 * Imports projects from Json project.json
                 */
                //TODO get this to use variables instead of primitives for $proNum (+4?)
                 $project = json_decode(file_get_contents("data/project.json"));
                 $proNum = 0;                 
                    foreach($project->Project as $pro){
                        $proNum++;
                        //Opens new class to group "newRow" projects into
                        if(($proNum == 1)){ //|| ($proNum == 2)){
                            echo '<div class = "webDev">';
                            $gamesDesign = 0;
                            echo '<div class = "newRow">';
                        }

                        include 'inc/project.php';
                    
                        /**
                         * When there are 3 projects in the newRow
                         * close the row and create a new one
                         */

                        //Messy But works until i have time to beautify
                        if(($proNum == 3) || ($proNum == 9)) {//|| ($proNum == 6)){
                            echo '</div>';
                            echo '<div class = "newRow">';
                        }
                        if($proNum == 6){
                            echo '</div>';
                            echo '</div>';
                            echo '<div class ="gameDev">';
                            $gamesDesign = 1;
                                echo '<div class = "newRow">';
                        }
                    
                        // if($proNum == 9){
                        //     echo '</div>';
                        //     echo '<div class = "newRow">';
                        // }

                        // When there are 12 projects in Close the project 
                        if(($proNum == 12)){
                                echo '</div>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
        <!-- <div id ="bar"></div> -->

        <div id ="contactMe">
            <div class ="contactDetails" >
                <!-- Align left -->
                <h1> Get in touch</h1>
                <p> Feel free to send me a message if you wish to get in contact and i'll get back to you as soon as possible!</p>
                <div id ="alerts"></div>
            </div>
            <!-- <div class ="form" method ="post"> -->
                <form  class ="form" method ="post">
                    <!-- firstname --> <!-- Lastname -->
                    <span class ="names"> 
                        <input type="text" id ="firstName" name ="firstName" placeholder="First Name">
                        <input type="text" id ="lastName" name ="lastName" placeholder="Last Name">
                    </span>

                    <input type ="email" id ="email" name ="email" placeholder="Email">
                    <input type="text" id ="subject" name ="subject" placeholder = "Subject">
                    <textarea id = "message" name ="message" placeholder="Message"></textarea>
                    <!-- <p id ="msg" name ="submitMessage">Submit</p> -->
                    <input id ="msg" type ="submit" value = "Submit" name = "submitMessage">
                </form>
            <!-- </div> -->
           <?php include "inc/contact.php" ?>
        </div>
        <div class="scrollUpPosition"> 
            <div class ="scrollup">
                <a href="#">
                    <i class="fas fa-chevron-up"></i>
                    <h3>Scroll up</h3>
                </a>
            </div>
        </div>
       
        <!-- <script src = "src/JS/app.js"></script> -->
        <script src = "slick.js"></script>
        <script src = "carousel.js"></script>
        <script src = "addVideo.js"></script>



        <!-- <script>
            $('#projectWrapper').slick({
                arrows:true,
                dots: true,
                // rtl: true
            });
        </script> -->
        <?php include "inc/footer.php" ?>

   

    </body>
</html>