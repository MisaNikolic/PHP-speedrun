<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Pick you favorite W3 race:</h3>
    <form action="checkboxes.php" method="post" >
        <input type="checkbox" name="race[]" value="human"> Human <br>
        <input type="checkbox" name="race[]" value="orc"> Orc <br>
        <input type="checkbox" name="race[]" value="undead"> Undead <br>
        <input type="checkbox" name="race[]" value="nightElf"> Night elf <br> <br>
        <input type="submit" value="submit" name="submit"> <br>
</form>
    <br> <hr>
    <h3>Pick you favorite color:</h3>
    <form action="checkboxes.php" method="post">
            <input type="checkbox" name="color[]" value="blue"> Blue <br>
            <input type="checkbox" name="color[]" value="green"> Green <br>
            <input type="checkbox" name="color[]" value="red"> Red <br>
            <input type="checkbox" name="color[]" value="white"> White <br>
            <input type="checkbox" name="color[]" value="black"> Black <br> <br>
            <input type="submit" value="submit2" name="submit2">
    </form>
    <hr>
</body>
</html>


<?php


    if($_SERVER["REQUEST_METHOD"] === "POST") {
    if( isset($_POST["submit"])) {
        $favoriteRaces = $_POST["race"] ?? [];
        if( !empty($favoriteRaces)) {
        foreach($favoriteRaces as $race) 
            echo $race . "<br>";
        }
        else {
            echo "You didn't pick any race.";
        }

    }
        if(isset($_POST["submit2"])) {
            $favoriteColors = $_POST["color"] ?? [];
            if(!empty($favoriteColors)) {
                foreach($favoriteColors as $color)
                    echo $color . "<br>";
            }
            else {
            echo "You didn't pick any color.";
        }
        }
         
} 

  
?>