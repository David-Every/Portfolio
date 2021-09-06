<!DOCTYPE html>
<?php

//Update Treehouse points
$page = "SCS Scheme";  
$treehousePoints = "15,278";
include "inc/header.php" 
?>

<html lang="en">
    <body id="body">
        <!-- <div id ="sidebar"></div> -->

        <!-- <div id = "b-menu"> 
            <a href="#"> 
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
                <div class ="burger-line"></div>
            </a>
        </div> -->

        <div class ="title-wrapper"> 
            <div class = "title">
                <h1>SCS Scheme</h1>
            </div>
        </div>

        <div id ="infomation">
            <div class ="scs">
                <div id ="scsImg"> 
                    <img  src ="imgs/SCS.jpg" alt ="Scion Coalition Scheme at Netmatters">
                </div>
                <div class ="sections">
                    <div class ="section">
                        <h2> Scion Coalition Scheme</h2>
                        <p>
                            The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give
                            willing candidates the opportunity to enter the industry as web developers. 
                            Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. 
                            The course is intensive and therefore the level of learning achieved is extensive in a short space of time.<br>
                            For more infomation - <a class = "Netmatters" href = "https://www.netmatters.co.uk/train-for-a-career-in-tech" target = "_blank">Netmatters Scion Coalition Scheme</a>
                        </p>
                    </div>

                    <div class ="section">
                        <!-- <h2>Treehouse</h2> -->
                        <div class ="treeH"> 
                            <a href ="https://teamtreehouse.com/"  target = "_blank" >
                                <img src ="imgs/TeamTreehouse.png" alt="Team Treehouse Logo" >
                            </a>
                        </div>
                        <p>
                            Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML
                            to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, 
                            allowing them to track their progress and see how much they've covered in certain areas.
                        </p>
                        <h3>Total Score:<small><?php echo $treehousePoints ?></small></h3>
                        <a class ="tree" href ="https://www.teamtreehouse.com/davidev" target = "_blank">Teamtreehouse.com/davidev</a>
                    </div>

                    <div class ="section">
                        <!-- <h2>About Netmatters</h2> -->
                        <div class ="netM"> 
                            <a  href ="https://www.netmatters.co.uk/"  target = "_blank" ><img src ="imgs/netmatters-logo.png"  alt ="Netmatters Logo" ></a>
                        </div>
                        <ul> 
                            <li>Established in 2008</li>
                            <li>Norfolk's leading technology company</li>
                            <li>Winner of the Princess Royal Training Award</li>
                            <li>Winner of EDP Skills of Tomorrow Award</li>
                            <li>80+ staff, 2 locations across Norfolk</li>
                            <li>Digital Marketing, Website & Software development & IT Support</li>
                            <li>Broad spectrum of clients, working nationwide</li>
                            <li>Operate to strict company values</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include "inc/footer.php"?>
    </body>
</html>