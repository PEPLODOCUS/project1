


<?php
        require_once ("connect.php");


     //check if the form has been submitted
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        //retrieve from data
        $name =  $_POST['name']; 
        $email = $_POST['email'];
        $age = $_POST['age'];
        $message =  $_POST['message'];

        //prepare the statement
        $updatemessage = "UPDATE messagestable SET  name='$name',email = '$email',age = '$age', message='$message' WHERE name='$name'";        

        //execute the statement
        if ($conn->query($updatemessage)==TRUE){
            echo "Updated successfully";
        }else{
            echo "Error : ".$updatemessage."<br>".$conn->error;
        }

        //close the connection
        $conn->close();
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
    <button onclick = "history.back()"> Back </button>
</body>
</html>

