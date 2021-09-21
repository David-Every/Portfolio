  
<?php

try{
    $username = 'davideve_davidevery';
    $password = '5MY1AypxU,pL';
    $db = new PDO('https://springfield.netmatters-server.co.uk:2083/cpsess6525955636/3rdparty/phpMyAdmin/sql.php?server=1&db=davideve_portfolio&table=contact&pos=0', $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "Unable to connect<br>";
    echo $e;
    exit;
}

