<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BURGER PLACE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="head">
        <h1>Welcome To THE BURGER PLACE</h1>
            <ul>
                <li class="navelement">
                    <a href="#About">About<abbr title="THE BURGER PLACE">TBP</abbr></a>
                </li>
                <li class="navelement">
                    <a href="#Menu">Our Menu</a>
                </li>
                <li class="navelement">
                    <a href="hours.php">Store Hours</a> 
                </li>
                <li class="navelement">
                    <a href="contact.php">Contact Us</a>
                </li>
            </ul>
        </nav>
        <figure>
            <img src="Images/hamburger.png" alt="Have a hamburger" title="Hamburgers all the way" width="400"
                height="267">
            <figcaption>
                BURGERS ALL THE WAY , ALL DAY
            </figcaption>
        </figure>
    </header>
    <hr>
    <main>
        <article id="About">
            <h2>About <abbr title="THE BURGER PLACE">TBP</abbr></h2>
            <P>
                <abbr title="THE BURGER PLACE">TBP</abbr> was founded in <time datetime="2024">2024</time>.<br>Our
                shop
                was built from a <strong>love of burgers</strong>🍔🍔🍔.<br> We hope our shop keeps the love for burgers alive in this town<br>
                through providing the best burgers we can with love and dedication to all our customers.<br>
                WELCOME ALL.
            </P>
            <aside>
                <h3>DID YOU KNOW ??</h3>
                <details>
                    <summary> Where do burgers originaly come from ?</summary>
                    <p>Germany is the home of the first hamburger.<br> While the inspiration for the hamburger did come from Hamburg, the sandwich concept was invented much later.<br>In fact, the concept of minced beef likely predates Hamburg</p>
                </details>
            </aside>
        </article>
        <hr>
        <article id="Menu">
            <h2>Our Menu</h2>
            <table border="1" width="250" height="200">
                <caption> <strong>OUR BURGERS</strong></caption>
                <thead>
                    <tr>
                        <th> <STRong>BURGERS</STRong></th>
                        <th scope="col"><abbr title="quantity">Qty</abbr></th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" rowspan="1">Sour Dough</th>
                        <td>1</td>
                        <td>$9.50</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="1">Chilli Patty</th>
                        <td>1</td>
                        <td>$10.50</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="1">Bacon BBQ</th>
                        <td>1</td>
                        <td>$11.25</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="1">Tuna Melt</th>
                        <td>1</td>
                        <td>$6.50</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="1">Beef and Blue</th>
                        <td>1</td>
                        <td>$7.50</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="1">Grilled Cheese</th>
                        <td>1</td>
                        <td>$5.50</td>
                    </tr>
                    <tr>
                        <td colspan="2">Burger,chips &amp; salad</td>
                        <td colspan="1">$20.00</td>
                    </tr>
                    <tr>
                        <td colspan="2">Burger and chips</td>
                        <td colspan="1">$15.50</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p><a href="#">Back To The Top</a></p>
        </article>
    </main>
    <hr>
</body>
</html>
<?php include_once ("footer.php"); ?>