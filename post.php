<?php

    $str1 = $_POST['str1'] ?? '';
    $str2 = $_POST['str2'] ?? '';

    // if($str1 != '' && $str2 != '') {
    //     header("location: post.php?sent=1");
    //     exit;
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST method</title>
    <style>
        body {
            padding: 10px;
            background-color: wheat;
        }

        #submitDiv {
            border: 2px solid black;
            width: 40%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div id="submitDiv">
    <form action="" method="post">
        <p>POST form</p>
        <label for="string1">1st string:</label>
        <input type="text" id="string1" name="str1"> <br>
        <label for="string2">2nd string:</label>
        <input type="text" id="string2" name="str2"> <br> <br>
        <input type="submit" value="Submit values">
    </form>
    </div>

    <div>
        <p>Submited values(can be seen in dev tools -> Network -> Payload ):</p>
        <p> <?php echo "1st string = $str1";  ?> </p>
        <p> <?php echo "2nd string = $str2";  ?> </p>
    </div>
    
</body>
</html>