<?php

    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "brocode";
    $connection = "";
    // primer jednostavne konekcije koja se u produkciji ne koristi
    try {
    $connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    if($connection) {
        echo "You are connected <br>";
    }
    }
    catch(mysqli_sql_exception) {
         echo "Could not connect <br>";
    }

?>