<?php
    require_once("connect.php");

//check if the form has been filled
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //retrieve data from the form
    $name =  $_POST['name']; 
    $email = $_POST['email'];
    $age = $_POST['age'];
    $message =  $_POST['message'];
    //create the statement
    $deleteMessage = "UPDATE messagestable SET name='$name',email ='$email',age ='$age', message='NULL' WHERE name='$name'";
    //execute the statement
    if ($conn->query($deleteMessage)==TRUE){
        echo "Message deleted successfully";
    }else{
        echo"Error : Could not delete the message";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button onclick="history.back()"> Back </button>
</body>
</html>