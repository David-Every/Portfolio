<?php
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