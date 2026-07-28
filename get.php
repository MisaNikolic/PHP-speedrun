<?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = $_GET['z'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET method</title>
    <style>
        body {
            padding: 10px;
            font-size: 18px;
        }

        #form {
            padding: 10px;
            border: 2px solid gray;
            width: 45%;
        }

        #x, #y, #z {
            width: 20%;
            margin-bottom: 7px;
            background-color: lightskyblue;
            color: white;
        }

        #submit {
            color: wheat;
            background-color: gray;
            padding: 8px;
        }

        #output {
            display: inline-block;
            padding: 10px;
            border: 2px solid gray;
            width: 45%;
        }

        .outputValues {
            background-color: yellow;
            width: fit-content;
        }
    </style>
</head>
<body>
    <div id="form">
        <p>GET FORM</p>
    <form action="" method="get">
        <label for="x">x:</label>
        <input type="text" name="x" id="x"> <br>
        <label for="y">y:</label>
        <input type="text" name="y" id="y"> <br>
        <label for="z">z:</label>
        <input type="text" name="z" id="z"> <br><br>
        <button type="submit" id="submit">Submit x,y,z</button>
    </form>
    </div>
    <div id="output">
        <p>Submited values:</p>
                <p class="outputValues"> <?php echo "x = $x"; ?> </p>
                <p class="outputValues"> <?php echo "y = $y"; ?> </p>
                <p class="outputValues"> <?php echo "z = $z"; ?> </p>

    </div>
</body>
</html>

