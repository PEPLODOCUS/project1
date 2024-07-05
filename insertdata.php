<?php
require_once ("Includes/db_connect.php");
include_once ("templates/heading.php");
include_once ("templates/nav.php");

if(isset($_POST["send_message"])){
    
    $ui = mysqli_real_escape_string($conn, $_POST["userId"]);
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $message = mysqli_real_escape_string($conn, $_POST["client_message"]);
    $date = mysqli_real_escape_string($conn, $_POST["datecreated"]);

    $insert_message = "INSERT INTO contacts (userid , fullname , email , message ,datecreated) VALUES ('$ui','$fn', '$mail', '$message','$date')";

    if ($conn->query($insert_message) === TRUE) {
        header("Location: view_messages.php");
        exit();
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>