<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <label for="x">x:</label>
        <input type="text" id="x" name="x">
        <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php

    $var = $_POST["x"] ?? "";
    echo "\$var = $var <br>";
    if(isset($var)) {
        echo "\$var is set.";
    }
    else {
        echo "\$var is not set.";
    }
    echo "<hr>";
    if(empty($var)) {
        echo "\$var is empty.";
    }
    else {
        echo "\$var is not empty.";
    }

?>