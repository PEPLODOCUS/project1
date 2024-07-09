<?php 

require_once("connect.php");

$exists = "SELECT id FROM mytb WHERE EXISTS (SELECT id FROM mytb WHERE mytb.id = id)";

//Execute the statement 
if ($conn->query($exists)==TRUE){
    echo "This person already exists";
}else{
    echo "Error :".$exists."<br>".$conn->error;
}

//close the connection
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "form.html" >
        <button onclick="history.back()">Back</button>
</body>
</html>