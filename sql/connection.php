<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "postgres";
        $password = "postgres";
        $dbname = "my_database";

        //code to connect to the database
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
        $connection = pg_connect("host=localhost dbname=my_database user=postgres password=postgres");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (!$pdo){
                echo"an error occured when connecting to the database";
                exit;
        }else{
            echo"connected successfully <br>";
            
        }
    ?>
    
</body>
</html>