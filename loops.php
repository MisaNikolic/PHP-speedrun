
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Counting using the <i style="font-size: 30px; color:green">while</i> loop</h2>
    <form action="" method="post">
        <label for="countUp">Count up to: </label>
        <input type="text" id="countUp" name="ctValue">
        <input type="submit" value="submit a number">
    </form>

    <h2>Counting using the <i style="font-size: 30px; color:blue">for</i> loop</h2>
    <form action="" method="post">
        <label for="forValue">Count down to:</label>
        <input type="text" id="forValue" name="forValue">
        <input type="submit" value="submit a number">
    </form>
    <hr>
     <h2>Displaying day of the week using the <i style="font-size: 30px; color:blue">switch</i> loop</h2>
    <form action="" method="post">
        <label for="day">Enter day(1-7) in the week:</label>
        <input type="text" id="day" name="day">
        <input type="submit" value="submit 1-7">
    </form>
    <hr>
</body>
</html>


<?php

$ctV = $_POST["ctValue"] ?? "";
$cuV = $_POST["forValue"] ?? "";

// while loop
    if($ctV != "") {
        echo "Counting up to <strong>$ctV</strong> using the <strong>while</strong> loop <br>";
         $n = 1;
        while($n <= $ctV) { 
            echo "$n <br>";
        // if($n == $ctV) {
        //     header("location: loops.php?sent=1");
        //     exit;
        // }
            $n ++;
    }
    }
   
// for loop
    if($cuV != "") {
        echo "Counting down from <strong>$cuV</strong> using the <strong>for</strong> loop <br>";
        for($n = $cuV; $n >0; $n--) {
            echo $n . "<br>";
        }

    }
 
// switch loop
    $day = $_POST["day"] ?? "";

    if($day != "") {
        switch($day) {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;
            default:
                echo "There are only 7 days in the week";
                break;
        }
    }

?>