
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .message {
            background-color: green;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <p>Choose your card type:</p> 
        <input type="radio" name="cardValue" value="Mastercard"> Mastercard
        <br>
        <input type="radio" name="cardValue" value="Visa"> Visa
        <br>
        <input type="radio" name="cardValue" value="American Express"> American Express
        <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>


<?php

    echo "<br>";

    if(isset($_POST["confirm"])) {
        $creditCard = $_POST["cardValue"] ?? "";
        switch($creditCard) {
            case "Mastercard":
                echo "<p class='message'>You have selected Mastercard! </p>";
                break;
            case "Visa":
                echo "You have selected Visa!";
                break;
            case "American Express":
                echo "You have selected American express!";
                break;
            default:
                echo "Please selected a card!";
                break;
        }
    }
    



?>