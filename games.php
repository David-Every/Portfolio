<!DOCTYPE html>
<?php
    $page = "Game Development";  
    include "inc/header.php";

    $gameName = $_GET['video'];
    // $gameName = "LazerDefender";

    $loadVideo = 'videos/'.$gameName.'.mp4';

    /**
     * Get URI Infomation about what Video that should be loaded
    */
?>



<body  id ="body">
    <div class ="title-wrapper" > 
        <div class = "title">
            <h1><?php echo $page?></h1>
        </div>
    </div>

    <div id = "vidWrapper">
        <div id = "video">
            <h2> <?php  echo $gameName; ?></h2>
            <iframe src = <?php echo $loadVideo ?> title="Test"> </iframe>
        </div>
        
    </div>

    

</body >

<?php include "inc/footer.php" ?>
<html>