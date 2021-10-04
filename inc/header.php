<!-- This will put the HTML into other pages that have the id = "sidebar"  -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script src="https://kit.fontawesome.com/8ac16a56cb.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon/favicon-16x16.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="src/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="src/slick/slick-theme.css"/>

    <link rel="stylesheet" href ="dist/style.min.css">
    <title> <?php echo $page .' | David Every';?></title> 

</head>

<!-- <link rel="manifest" href="/site.webmanifest"> -->


<div id ="sidebar"> 
    <h1 id ="initials"><a href="index.php">DE</a></h1>
    <ol>
        <li><a href = "aboutMe.php"> About Me</a></li>
        <li><a href = "index.php#main-content"> My Portfolio </a></li>
        <li><a href = "codeExamples.php"> Coding Examples</a></li>
        <li><a href = "scsScheme.php"> SCS Scheme </a></li>
        <li><a href = "index.php#contactMe"> Contact Me </a></li>
    </ol>

    <ul>
        <li><a href ="https://github.com/David-Every?tab=repositories" target="_blank"><i class="fab fa-github"></i></a></li>
        <li><a href ="https://www.linkedin.com/in/david-every-a8a77293/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
</div>

<a href = "#">
    <div id = "b-menu"> 
        <div class ="burger-line"></div>
        <div class ="burger-line"></div>
        <div class ="burger-line"></div>
    </div>
</a>