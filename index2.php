<?php
   // POST metoda
   $name = $_POST["name"] ?? "";
   $password = $_POST["password"] ?? "";

    if($name != "" && $password != "") {
        header("location: index.php?sent=1");
        exit;
    }
    if (isset($_GET['sent'])) {
    echo "Forma je uspesno poslata!";
}
?>

<?php
    // GET metoda
    $x = $_GET['x'] ?? '';
    $y = $_GET['y'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 15px;
            background-color: skyblue;
            font-size: 20px;
            font-weight: 300;
            font-family:'Courier New', Courier, monospace;
        }

        #postForm {
            border: 2px solid blue;
            padding: 10px;
            width: 30%;
            margin-bottom: 20px;
        }

        #pfTitle{
            text-align: center;
            color: blue;
        }

        #getForm {
            border: 2px solid green;
            padding: 10px;
            width: 30%;
        }

        #gfTitle{
            text-align: center;
            color: green;
        }

        #messageDiv {
            border: 2px solid green;
            padding: 10px;
            width: 30%;
            background-color: green;
            font-size: 20px;
            font-weight: 300;
            color: white;
            font-family:'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <form method="post" action="index.php" id="postForm">

        <p id="pfTitle">Test form - POST</p>
        <label for="nameID">Name:</label> <br>
        <input type="text" name="name" id="nameID"> <br>
        <label for="passwordID">Password:</label> <br>
        <input type="password" name="password" id="passwordID"> <br>
        <input type="submit" value="Log in"> <br>
    </form>

    <form action="index.php" method="get" id="getForm">
        <p id="gfTitle">Test form - GET</p>
        <label for="xID">X:</label> <br>
        <input type="number" name="x" id="xID"> <br>
        <label for="yID">Y:</label> <br>
        <input type="number" name="y" id="yID"> <br>
        <input type="submit" value="Confirm"> <br>
    </form>
    <div id="messageDiv">
        <p>Submit confirmation message:</p>
        <p id="message"><?php echo"x=$x  <br> y=$y"; ?></p>
    </div>
</body>
</html>


