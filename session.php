<?php

   session_start();

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST["submit"])) {
            $username = $_POST["username"] ?? "";
            $password = $_POST["password"] ?? "";
            if($username !="" && $password !="") {
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                header("location: logout.php");
            }
            else {
                echo "Please enter username and password!";
            }
        }
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <style>
        body {
            background-color: lightyellow;
            margin-left: 20px;
            margin-top: 30px;
        }
        #submit {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h3>Log in form</h3>
    <form action="session.php" method="post">
        <label for="username">Username:</label> <br>
        <input type="text" id="username" name="username"> <br>
        <label for="password">Password:</label> <br>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>