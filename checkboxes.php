<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Pick you favorite W3 race:</p>
    <form action="checkboxes.php" method="post" >
        <input type="checkbox" name="race[]" value="human"> Human <br>
        <input type="checkbox" name="race[]" value="orc"> Orc <br>
        <input type="checkbox" name="race[]" value="undead"> Undead <br>
        <input type="checkbox" name="race[]" value="nightElf"> Night elf <br>
        <input type="submit" value="submit" name="submit"> <br>
</form>
</body>
</html>


<?php


    if($_SERVER["REQUEST_METHOD"] === "POST") {
    if( isset($_POST["submit"])) {
        $favoriteRaces = $_POST["race"] ?? "";
        if( !empty($_POST["race"])) {
            echo "<br>";
        foreach($favoriteRaces as $race) 
            echo $race . "<br>";
        }
        else {
            echo "You didn't pick any race.";
        }
    }
    
} 


    

?>