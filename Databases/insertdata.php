<?php
    
    require_once ("connect.php");


    //check if the form has been submitted
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //retrieve from data
        $id = $_POST['id'];
        $name =  $_POST['name']; 
        $message =  $_POST['message'];

        //prepare the statement
        $insert_message = "INSERT INTO mytb VALUES ('$id' , '$name' , '$message')";

        //execute the statement
        if ($conn->query($insert_message)==TRUE){
            echo "new record created successfully";
        }else{
            echo "Error : ".$insert_message."<br>".$conn->error;
        }

        //close the connection
        $conn->close();
    }
?>