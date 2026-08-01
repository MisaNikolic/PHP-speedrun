<?php
    require_once "config.php";
    // include("config.php");

    // Stara verzija - sa rucnim unosom podataka za INSERT
    $username = "Misa";
    $password = "Misa1702!";

    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

         try {
             mysqli_query($connection, $sql);
             echo "New user successfully created!";
             $sql2 = "SELECT * FROM users";
            $result = mysqli_query($connection, $sql2);

            while($row =  $row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["username"] . "<br>";
            echo $row["reg_date"] . "<br>";
            }

         }  
         catch (mysqli_sql_exception) {
            echo "Could not register user";
         }

         mysqli_close(($connection));

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL stuff</title>
    <style>
        body {
            background-image: linear-gradient(to bottom, green, lightgreen);
        }
    </style>
</head>
<body>
    
</body>
</html>