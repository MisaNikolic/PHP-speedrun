<?php
    session_start();

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
    
    if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["logout"])) {
        session_destroy();
        header("location: session.php");
    }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out</title>
    <style>
        body{
            background-color: lightgreen;
            margin: 20px;
        }
        #logout {
            padding: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Log out" id="logout">
    </form>
    
</body>
</html>