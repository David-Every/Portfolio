<?php
function sendMessage($fName,$lName, $email, $subject, $message){
    include "connection.php";

    $sql = "INSERT INTO contact (firstName lastName emailAddress subject message)
    VALUES ('$fName','$lName','$email',$subject', '$message')";

    try{
        $temp = $db->prepare($sql);
        $temp->execute();
    }catch(Exception $e){
        throw $e;
    }
}
function testConnection(){
    try{
        include "connection.php";
    }catch(Exception $e){
        throw $e;
    }
}