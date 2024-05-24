<?php
    date_default_timezone_set("Africa/Nairobi");
    echo "This is my first php code";
    print "<br>";
    print "Today is <span style  = 'text-transform : uppercase;'> thursday </span>";
    echo "<br>";
    print "my name is <span style = 'text-transform: uppercase; color: #ff2436;'>david</span> ";
    print "<br>";
    print date("y-m-d");
    print "<br>";
    print date('l ,F jS Y');
    print "<br>";
    print date('jS F Y', strtotime("+9 days"));
    print "<br>";
    print date("jS  F  Y" , strtotime("-4 months"));
    print "<br>";
    print date("h : i : s" ,strtotime("+1 hours"));
    print "<br>";
    print "Today is : " . date("l jS F Y");
    print "<br>";
    print date("h : i : s");
    print "<br>";
    $name = "David Muthee";
    $yob = "2005";
    $dob = "9-3-$yob";
    print $name . " was born in " . date("j F Y" , strtotime("$dob"));
    $current_year = date("Y");
    print "<br>";
    print $current_year;
    $age = $current_year - $yob;
    print "<br>";
    print $name .  " is " . $age . " years old ";
    print "<br>";

    $birthday = new DateTime($dob);
    $today = new DateTime('today');

    $interval = $birthday->diff($today);

    echo '<pre>';
    print_r($interval);
    echo '</pre>';

    



?>