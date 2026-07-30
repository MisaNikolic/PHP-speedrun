<?php
    // ucitavamo fajl config2.php jednom (tu nam je definisana konecija ka bazi)
    require_once "config2.php";

    // pravimo klasu knjiga 
    class Book {
        // atributi klase: naslov, autor, strane
        public string $title;
        public string $author;
        public int $pages;
        // konstruktor klase koji sadrzi poruku da je uspesno napravljena nova knjiga
        function __construct(string $title, string $author, int $pages) {
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        echo "New book created! <br>";
            $this->print_a_book();
    }
        // funkcija za prikaz knjige - treba proveriti(ne stampa trenutno)
        function print_a_book() {
                echo $this->title . " | " . $this->author . " ($this->pages pages)" . "\n";
        }

    }
    // pomocne promenjive za rad sa bazom
    $errors = [];
    $success = "";

    $title = "";
    $author = "";
    $pages = "";
    

    // reset forme - nakon sto uspesno unesemo knjigu 
    $reset = isset($_GET["reset"]) && $_GET["reset"] === "1";

    // koristimo POST metodu
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $book = null;
        // smestamo vrednosti sa UI forme(title, author, pages) u promenjive ($title, $author, $pages)
        $title = trim($_POST["title"] ?? "");
        $author = trim($_POST["author"] ?? "");
        $pages = trim($_POST["pages"] ?? "");   
        // ovde cemo proveravati da polja forme za unos knjige nisu "prazna" i dodavati odgovarajuce
        // greske u niz za greske $errors
        if($title === "") {
            $errors[] = "Title is required.";
        }

        if($author === "") {
            $errors[] = "Author is required.";
        }

        if($pages === "") {
            $errors[] = "Number of <strong>pages</strong> is required";
        } elseif (!filter_var($pages, FILTER_VALIDATE_INT) || (int)$pages <=0) {
            $errors[] = "Pages must be a positive number.";
        }
        // Ako nema gresaka(niz $errors je prazan), INSERTuj  u bazu novu knjigu sa unetim vrednostima
        if(empty($errors)) {
        try{
            // globalna promenjiva iz fajla config2.php $stmd -> priprema za insert
            $stmd = $pdo->prepare("INSERT INTO books (title, author, pages)
                                   VALUES (?, ?, ?)
                                   ");
            // izvrsavanje INSERTa sa vredonostima promenljivih(preneto iz forme)                       
            $stmd->execute([
                $title, 
                $author, 
               (int)$pages
                ]);
            $book = new Book($title, $author, $pages);
            // $pdo->commit(); ovo nam nije neophodno
            // poruka da je knjiga uspesno dodata u bazu
            $success = "Book was successfully added.";
            // resetujemo vrednosti promenljivih povezanih sa vrednosti forme sa UIa
            $title = "";
            $author = "";
            $pages = "";    


        }
        // Ako se desi neka greska u procesu onda dodajemo poruku u niz za greske $errors
        catch (PDOException $e) {
                // ako se desi neka greska, vracamo sve unazad!
                // $pdo->rollBack();
                $errors[] = "Something went wrong. Please try again.";
    }
    
    // $book1 = new Book("Zli dusi", "Dostojevski", 700);
    }

    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        #add_a_book {
            border: 2px solid black;
            width: 30%;
            padding: 15px;
            background-color: lightyellow;
        }

        #submit {
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <form action="classes.php" method="post" id="add_a_book">
        <h3>Add new books:</h3>
        <label for="title">Book title:</label> <br>
        <input type="text" name="title" id="title"> <br>
        <label for="author">Book author:</label> <br>
        <input type="text" name="author" id="author"> <br>
        <label for="pages">Pages:</label> <br>
        <input type="number" id="pages" name="pages"> <br>
        <input type="submit" name="submit" value="Submit" id="submit">
    </form>
    <?php if (!empty($errors)): ?>
    <div style="color: red;">
        <?php foreach ($errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if ($success !== ""): ?>
    <p style="color: green;"><?= $success ?></p>
<?php endif; ?>
</body>
</html>