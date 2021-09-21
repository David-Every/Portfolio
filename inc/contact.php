<?php
    include "function.php";
/**
 * Sanitises form input and checks if any fields are empty
 * if all forms are filled in form gets submitted to SQL database.
 */

if(isset($_POST["submitMessage"])){

    $fName = $_POST["firstName"] = trim(filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_STRING));
    $lName = $_POST["lastName"] = trim(filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_STRING));
    $email = $_POST["email"] = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING));
    $subject = $_POST["subject"] = trim(filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING));
    $message = $_POST["message"] = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING));

    if(empty($fName)){
        echo'<script type = "text/javascript"> noFirstName(); </script>';
    }
    if(empty($lName)){
        echo'<script type = "text/javascript"> noLastName(); </script>';
    }
    if(empty($email)){
        echo'<script type = "text/javascript"> noEmail(); </script>';
    }
    if(empty($subject)){
        echo'<script type = "text/javascript"> noSubject(); </script>';
    }
    if(empty($message)){
        echo'<script type = "text/javascript"> noMessage(); </script>';
    }

    if(!empty($fName) && !empty($lName) && !empty($email) &&  !empty($subject) & !empty($message)){
        // echo 'Form is Submittable';
        echo'<script type = "text/javascript"> messageSuccessful(); </script>';
        try{
            testConnection();            
        }catch(Exception $e){
            throw $e;
        }
        // sendMessage($fName, $lName,$email, $subject,$message);
    }
}
?>