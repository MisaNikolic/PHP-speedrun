<?php

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        // $username = $_POST["username"] ?? "";
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if(isset($_POST["submit"])) {
            echo $username . "<br>";
        }

        if(empty($age)) {
            echo "Wrong number format!";
        }
        else {
            echo "Your entered age is $age";
        }


    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 10px;
            padding: 0px;
            background-color: lightyellow;
        }
        #userDiv {
            border: 2px solid black;
            margin: 5px;
            padding: 5px;
            width: 40%;
        }

        #form {
            display: inline-block;
            border: 2px solid blue;
            padding: 10px;
            margin: 5px;
        }

        #username {
            margin-bottom: 10px;
            width: 50%;
        }

        #age {
            margin-bottom: 10px;
            width: 20%;
        }
    </style>
</head>
<body>
    <div id="userDiv">
    <form action="sanitizeAndValidateInput.php" method="post" id="form">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"> <br>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age"> <br>
        <input type="submit" name="submit">
    </form>
    </div>
</body>
</html>