<?php
    require_once("connect.php");

//check if the form has been filled
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //retrieve data from the form
        $id = $_POST['id'];
        $name =  $_POST['name']; 
        $message =  $_POST['message'];
    //create the statement
    $deleteMessage = "UPDATE mytb SET id='$id', name='$name', message='NULL' WHERE id=$id";
    //execute the statement
    if ($conn->query($deleteMessage)==TRUE){
        echo "Message deleted successfully";
    }else{
        echo"Error : CCould not delete the message";
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