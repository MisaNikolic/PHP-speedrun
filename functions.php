<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .title {
            font-size: 20px;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <!-- Forme za izbor piramide za crtanje za uneti broj n -->
    <p class="title">Nacrtaj obrnutu piramidu</p>
    <form action="functions.php" method="post">
        <label for="n1">Enter number:</label>
        <input type="text" name="n1" id="n1">
        <input type="submit" name="submit1">
    </form>
    <hr>
    <p class="title">Nacrtaj desno poravnatu piramidu</p>
    <form action="functions.php" method="post">
        <label for="n2">Enter number:</label>
        <input type="text" name="n2" id="n2">
        <input type="submit" name="submit2">
    </form>
    <hr>
    <p class="title">Nacrtaj piramidu</p>
    <form action="functions.php" method="post">
        <label for="n3">Enter number:</label>
        <input type="text" name="n3" id="n3">
        <input type="submit" name="submit3">
    </form>
    <hr>
     <p class="title">Nacrtaj dijamant</p>
    <form action="functions.php" method="post">
        <label for="n4">Enter number:</label>
        <input type="text" name="n4" id="n4">
        <input type="submit" name="submit4">
    </form>
    <hr>
     <p class="title">Nacrtaj suplji dijamant</p>
    <form action="functions.php" method="post">
        <label for="n5">Enter number:</label>
        <input type="text" name="n5" id="n5">
        <input type="submit" name="submit5">
    </form>
    <hr>
</body>
</html>



<?php
    
    // funkcije za iscrtavanje odgovarajucih piramida za uneto n
    function obrnuta_piramida(int $n) {
        for($i = $n; $i >0; $i--) {
            echo str_repeat("*", $i) . "<br>";
        }
    }

    function desno_poravnata_piramida(int $n) {
        echo "<pre>";
         for($k = 1; $k <= $n; $k++) {
           
            echo str_repeat(" ", $n-$k);
            echo str_repeat("*", $k);
            echo "<br>";            
         }
         echo "</pre>";
    }

    function standardna_piramida(int $n) {
        echo "<pre>";

        for($i = 1; $i <=$n; $i++) {
            echo str_repeat(" ", $n-$i);
            echo str_repeat("*", 2*$i -1);
            echo "\n";
        }

        echo "</pre>";
    }

    function dijamant(int $n) {
        echo "<pre>";
        // gornja deo dijamanta(pravilna piramida)
            for($i =1; $i <=$n; $i ++) {
                echo str_repeat(" ", $n-$i);
                echo str_repeat("*", 2*$i -1);
                echo "\n";
            }
            // donji deo dijamanta
            for($i =$n-1; $i >0; $i --) {
                echo str_repeat(" ", $n-$i);
                echo str_repeat("*", 2*$i -1);
                echo "\n";
            }


        echo "</pre>";
    }

    function suplji_dijamant(int $n) {
        echo "<pre>";
        // gornja deo dijamanta(pravilna piramida)
            for($i =1; $i <=$n; $i ++) {
                echo str_repeat(" ", $n-$i);
                echo "*";
                echo str_repeat(" ", abs((($i-1)*2)-1));
                if($i != 1) 
                    echo "*";
                echo "\n";
            }
            // donji deo dijamanta
            for($i =$n-1; $i >0; $i --) {
                echo str_repeat(" ", $n-$i);
                echo "*";
                echo str_repeat(" ", abs((($i-1)*2)-1));
                if($i != 1)
                    echo "*";
                echo "\n";
            }


        echo "</pre>";

    }

    // preko POST metode obradjujemo uneto n (imamo submit za svaku formu)
    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $n1 = $_POST["n1"] ?? "";
        if($n1 != "") {
            obrnuta_piramida($n1);
        }

        $n2 = $_POST["n2"] ?? "";
        if($n2 != "") {
            desno_poravnata_piramida($n2);
        }

        $n3 = $_POST["n3"] ?? "";
        if($n3 != "") {
            standardna_piramida($n3);
        }

        $n4 = $_POST["n4"] ?? "";
        if($n4 != "") {
            dijamant($n4);
        }

        $n5 = $_POST["n5"] ?? "";
        if($n5 != "") {
            suplji_dijamant($n5);
        }
    }
    




?>
