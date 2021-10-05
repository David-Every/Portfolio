<?php
echo '<div class = "project">';
    echo '<div class = "projectLinks">';
    //Temp
    
    // $gameName = "Glitch";
    //Temp

        if($gamesDesign){

            /**
             * If the the project is a Game  get the title of it search for spaces and remove them
             * Send this gameNameOuutput though the URI to the games.php page
             * The games.php page will use this infomation to load in the correct video
             */
            $searchString = " ";
            $replaceString = "";
            $originalString = $pro->altTitle;
            $gameNameOutput = str_replace($searchString,$replaceString,$originalString); 
            
            echo '<a href = "games.php?video='. $gameNameOutput .'" target = "_blank">';
        }else{
            echo '<a href ="'.$pro->link.'" target = "_blank">';
        }
            echo '<img src = "'.$pro->image.'" alt = "'.$pro->altTitle.'">';
            echo '<h3>'.$pro->altTitle.'</h3>';
            echo '<div class = "projectDescription">';
                echo '<p>'.$pro->description.'</p>';
            echo '</div>';
        echo '</a>';
    echo '</div>';
echo '</div>';