<?php
    require_once "config.php";
    // include("config.php");

    // Stara verzija - sa rucnim unosom podataka za INSERT
    //      $username = "Misa";
    //     $password = "Moja_sifra";
    // Nova verzija(korigovana) - dodata je forma sa submitom username, password
    // Napomena, ovo nije bezbedan nacin konecije sa bazom, samo je za svrhu ucenja
    // In real-app situation se koristi prepare 
    // Takodje password nije hashovan
   

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        
    if(isset($_POST["submit"])) {
         $username = $_POST['username'] ?? "";
        $password = $_POST['password'] ?? "";
    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

         try {
             mysqli_query($connection, $sql);
             echo "New user successfully created!";
             $sql2 = "SELECT * FROM users";
            $result = mysqli_query($connection, $sql2);

            while( $row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["username"] . "<br>";
            echo $row["reg_date"] . "<br>";
            }

         }  
         catch (mysqli_sql_exception) {
            echo "Could not register user";
         }

         mysqli_close(($connection));
    }
         }

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
    <form action="sql_stuff.php" method="post">
        <label for="username">Username:</label> 
        <input type="text" id="username" name="username" placeholder="Enter your username"> <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
        <input type="submit" name="submit">
    </form>
</body>
</html>