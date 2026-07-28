<?php

    // arrays
    $fruits = ["apple", "banana", "orange"];
    
    echo "<pre><h1>ARRAYS</h1
     <strong>Accessing elements by their respective indexes</strong>
      fruits = [apple, banana, orange] 
      fruits[0] =  {$fruits[0]} 
      fruits[1] =  {$fruits[1]} 
      fruits[2] =  {$fruits[2]} 
     </pre> <br>";
    
    // array functions

    // adding new elements(at the end of the array): array_push()
    array_push($fruits, "kiwi");
    // we can add more than one element
    array_push($fruits, "pineapple", "coconut", "peach");

    // removing the last element - array_pop()
    array_pop($fruits);
    // removing the first element(and shiting remaining elements) array_shift()
    array_shift($fruits);
    // creating a new array from an existing array with its elements reversed array_reverse()
    $fruits_reversed = array_reverse($fruits);
    echo "reversed array: <br>";
    foreach($fruits_reversed as $fruit) {
        echo $fruit . "<br>";
    }
    echo "<br>";

    // foreach loop
    echo "<strong>Printing elements of an array using forech loop</strong> <br>";
      foreach($fruits as $fruit) {
        echo $fruit . "<br>";
    }



    echo "<br> <br> <br> <br> <hr>";
    // associative arrays
    echo "<h1> ASSOCIATIVE ARRAYS </h1>";
    $capitals = [
        "USA" => "Wasington DC",
        "Italy" => "Rome",
        "Japan" => "Tokyo",
        "Serbia" => "Beograd"
    ];

    $keys = array_keys($capitals);
    $values = array_values($capitals);

    // printing only key values of an associative array
    echo "<h3> Printing keys:   Country(key) </h3> <br>";
    foreach($keys as $key) {
        echo "$key <br>";
    }

    // printing only values of an associative array
    echo "<h3> Printing values: Capital(value) </h3> <br>";
    foreach($values as $value) {
        echo "$value <br>";
    }
    // printing associtave arrays using the (key, value) pairs
    echo "<h3>COUNTRY| CAPITAL </h3><br>";
    echo "<pre>";
    foreach($capitals as $key => $value) {
        echo "{$key}       | {$value} <br>";
    }
    echo "</pre>";
?>



