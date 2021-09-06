<?php

if(isset($_POST["submitMessage"])){

    $fname = $_POST["firstName"] = trim(filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_STRING));
    $lname = $_POST["lastName"] = trim(filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_STRING));
    $email = $_POST["email"] = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING));
    $subject = $_POST["subject"] = trim(filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING));
    $message = $_POST["message"] = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING));

    if(empty($fname)){
        echo '<div class = "errorMessage"> Invalid Name </div>';
    }
    if(empty($lname)){
        echo '<div class = "errorMessage"> Invalid Location </div>';
    }
    if(empty($email)){
        echo '<div class = "errorMessage"> Invalid Image </div>';
    }
    if(empty($subject)){
        echo '<div class = "errorMessage"> Invalid Description </div>';
    }

    if(!empty($message) && !empty($location) && !empty($img) &&  !empty($desc)){
        echo 'Form is Submittable';
        sendMessage();
    }else{
        echo ' Form is not Submittable';
    }

}
?>