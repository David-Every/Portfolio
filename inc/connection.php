  
<?php

try{
    $username = 'root';
    $password = '';
    $db = new PDO('https://springfield.netmatters-server.co.uk:2083/cpsess1877760814/3rdparty/phpMyAdmin/db_structure.php?server=1&db=davideve_portfolio_contact', $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "Unable to connect";
    echo $e;//->getMessage();
    exit;
}