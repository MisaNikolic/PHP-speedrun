<?php

    require_once "config2.php";

    class Book {
        public string $title;
        public string $author;
        public int $pages;

        function __construct(string $title, string $author, int $pages) {
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        echo "New book created! <br>";
            $this->print_a_book();
    }

        function print_a_book() {
                echo $this->title . " | " . $this->author . " ($this->pages pages)" . "\n";
        }

    }

    $errors = [];
    $success = "";

    $title = "";
    $author = "";
    $pages = "";
    


    $reset = isset($_GET["reset"]) && $_GET["reset"] === "1";

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $title = trim($_POST["title"] ?? "");
        $author = trim($_POST["author"] ?? "");
        $pages = trim($_POST["pages"] ?? "");   

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
        
        if(empty($errors)) {
        try{
            $stmd = $pdo->prepare("INSERT INTO books (title, author, pages)
                                   VALUES (?, ?, ?)
                                   ");
            $stmd->execute([
                $title, 
                $author, 
               (int)$pages
                ]);
            
            // $pdo->commit();

            $success = "Book was successfully added.";

            $title = "";
            $author = "";
            $pages = "";


        }
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