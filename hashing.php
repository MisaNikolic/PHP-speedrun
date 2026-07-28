<?php

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST["submit"])) {
            $username = $_POST["username"] ?? "";
            $password = $_POST["password"] ?? "";
            if(isset($password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            echo $hashed_password . "<br>";
            }
            echo $password;
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