<?php

    // standarno koriscenje POST metode za unos vrednosti u polja username i password kroz formu UIa
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST["submit"])) {
            $username = $_POST["username"] ?? "";
            $password = $_POST["password"] ?? "";
            $hashed_password = "";
            // Ako je uneto password pozovi password_hash() funkciju
            if(isset($password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            }
            // Ispis rezultata na ekran
            echo "Username: {$username} <br>";
            echo "Password: {$password} <br>" ;
            echo "Hashed_password: {$hashed_password} <br><hr><br>" ;
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
    <style>
        body {
            background-color: lightseagreen;
        }

        #login {
            margin-top: 8px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <form action="hashing.php" method="post">
        <label for="uname">Username:</label> <br>
        <input type="text" name="username" id="uname"> <br>
        <label for="pass">Password:</label> <br>
        <input type="password" name="password" id="pass"> <br>
        <input type="submit" name="submit" id="login" value="log in">
    </form>
</body>
</html>