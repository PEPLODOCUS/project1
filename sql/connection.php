<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connection  =  pg_connect("host=localhost dbname=my_database user=postgres password=postgres");
        
        if(!$connection){
            echo "An error occured";
            exit;
        }

        $result = pg_query($connection, "SELECT * FROM records");

        if (!$result){
            echo "an error occured in displaying the data";
                exit;
        }
    ?>

    <table border=1>

        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>city</th>
            <th>county</th>
            <th>phone</th>
        </tr>

        <?php
            while($row=pg_fetch_assoc($result)){
                echo"
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