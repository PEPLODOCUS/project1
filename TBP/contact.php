<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TBP </title>
</head>

<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li class="navelement">
                    <a href="index.php">Home</a>
                </li>
                <li class="navelement">
                    <a href="/TBP//#About">About<abbr title="The Little Taco Shop">LTS</abbr></a>
                </li>
                <li class="navelement">
                    <a href="/TBP//#Menu"> Our Menu</a>
                </li>
                <li class="navelement">
                    <a href="hours.php">hours</a>
                </li>
            </ul>
        </nav>
        <figure>
            <img src="Images/hamburger-1414423_1280.jpg" alt="THE BURRGE PLACE" title="BURGERS ALL THE WAY , ALL DAY"
                width="400" height="260">
            <figcaption>
                THE BURGER PLACE
            </figcaption>
        </figure>
    </header>
    <hr>
    <main>
        <section>
            <h2>Our Contact Form</h2>

            <form action="" method="post">
                <fieldset>
                    <legend>Send Us A Message</legend>
                    <p>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder=" your name" required>
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder=" your email" required>
                    </p>
                    <p>
                        <label for="age">Age:</label>
                        <input type="number" name="age" id="age" placeholder=" your age " required>
                    </p>
                    <p>
                        <label for="Message">Your Message:</label>
                        <br>
                        <textarea name="message" id="message" cols="50" rows="5"
                            placeholder="Type your message here"></textarea>
                    </p>
                </fieldset>
                <button type="submit" formaction="insertMessage.php">SEND</button>
                <button type="reset">CLEAR</button>
                <button type="submit" formaction="deleteMessage.php">DELETE MESSAGE</button>
                <button type="submit" formaction="updateMessage.php">UPDATE</button>
                
            </form>
        </section>
        <section>
            <h2>Our Location</h2>
            <address>
                BURGER PLACE VIEW ST., Suite B <br>
                Naurobi City, MO 55545-87555
                <br><br>
                Phone: <a href="tel:+5555555555">555-555-5555</a>
            </address>
        </section>
    </main>
    <hr>
</body>
</html>
<?php include_once ("footer.php"); ?>