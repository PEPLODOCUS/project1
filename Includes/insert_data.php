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

        //data to be inserted
        $id = 12;
        $name = "Moth";
        $age = 59 ;
        $city = " Turkaana";
        $country = "Eldjfdet";
        $phone = '+44-987-654-3210';

        //sql statement to insert data into the database
        $sql ="INSERT INTO records (id,name,age,city,country,phone) VALUES (:id,:name,:age,:city,:country,:phone)";

        // prepare the sql statement
        $stmt = $pdo->prepare($sql);

        // bind the parameters
        $stmt->bindparam(':id',$id,PDO::PARAM_INT);
        $stmt->bindparam(':name',$name,PDO::PARAM_STR);
        $stmt->bindparam(':age',$age,PDO::PARAM_INT);
        $stmt->bindparam(':city',$city,PDO::PARAM_STR);
        $stmt->bindparam(':country',$country,PDO::PARAM_STR);
        $stmt->bindparam(':phone',$phone,PDO::PARAM_INT);

        // execute the statement
        $stmt -> Execute();

        echo "statement executed successfully ";

         // code to output the whole database
         $result = pg_query($connection,"SELECT * FROM records");
    ?>
    <table border = 1>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>city</th>
            <th>country</th>
            <th>phone</th>
        </tr>
        <?php
                while($row = pg_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[age]</td>
                        <td>$row[city]</td>
                        <td>$row[country]</td>
                        <td>$row[phone]</td>
                    </tr>
                ";
            }
        ?>
    </table>
</body>
</html>