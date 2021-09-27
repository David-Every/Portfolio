  
<?php


try{
    $username = 'davideve_davidevery';
    $password = 'aET49AEgD3uA';
    $database = 'mysql:host=netmatters.david-every.netmatters-scs.co.uk;dbname=davideve_portfolio;port=3306';
    $db = new PDO($database, $username, $password);

    // $db = new PDO($database, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "Unable to connect<br>";
    echo $e;
    exit;
}

