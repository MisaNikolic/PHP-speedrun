<?php
    // kredencijali za bazu
    $host = "127.0.0.1";
    $dbname = "book_store";
    $username = "root";
    $password = "";
    $port = 3307;
    // try-catch blok koda za konekciju ka bazi
    try {
        // kreiranje nove konekcije sa odgovarajcim parametrima
        $pdo = new PDO(
            "mysql:
                host=$host;
                port=$port;
                dbname=$dbname;
                charset=utf8mb4",
                $username,
                $password
        );
        // podsesavanje atributa za greske i fetch metode
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // poruka da smo se uspesno konektovali sa bazom
        echo "successfully connected to database! <br>";
    }
    // hvatanje izuzetka u slucaju da ne prodje konekcija sa slanje poruke
    catch(PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }


?>