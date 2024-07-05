<?php
require_once ("Includes/db_connect.php");
include_once ("templates/heading.php");
include_once ("templates/nav.php");




if(isset($_POST["send_message"])){
    $ui = 4356;
    $fn = "david";
    $mail = "david@gmail.com";
    $message = "please work";
    $date = 5;


    $insert_message = "INSERT INTO contacts (userid , fullname , email , message ,datecreated) VALUES ('$ui','$fn', '$mail', '$message','$date')";

    if ($conn->query($insert_message) === TRUE) {
        header("Location: view_messages.php");
        exit();
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>

<div class="banner">
    <h1>Talk to Us</h1> 
</div>

<div class="row">
    <div class="content">
    <h1>Talk to Us</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        
        <label for="ui">UserId:</label><br>
        <input type="number" id="ui" placeholder="userId" name="userId" required><br><br>

        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" required><br><br>

        <label for="cm">Message:</label><br>
        <textarea name="client_message" id="" cols="30" rows="5" required></textarea><br><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" placeholder="date created" name="date created" ><br><br>

        <input type="submit" name="send_message" value="Send Message">
    </form>
                </div>
<?php include_once ("templates/sidebar.php"); ?>
        </div>
<?php include_once ("templates/footer.php"); ?>