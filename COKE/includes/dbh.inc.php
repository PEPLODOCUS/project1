<?php
 
 $dsn = "mysql:host=localhost;myfirstdatabase";
 $dbusername = "root";
 $dbpassword = ""; 

 try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo-> setAttribute(PDO::ATTR_ERRORMODE,PDO::ERRORMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "connection failed: ". $e->getmessage();
 }

 