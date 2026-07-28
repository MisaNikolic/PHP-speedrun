<?php 

    echo "<h2>String functions</h2>";
    echo "<pre>";

    $string1 = "This is the first string.";
    $string2 = "  this_is_the_second_string.   ";


    echo "|$string1| <strong> -> strtoupper() -></strong>  |" . strtoupper($string1) . "|\n";
    echo "|$string1| <strong> -> strtolower() -></strong>  |" . strtolower($string1) . "|\n";
    echo "|$string2| <strong> -> trim() -></strong>  |" . trim($string2) . "|\n";
    echo "|$string1| <strong> -> str_pad() -></strong>  |" . str_pad($string1, 30) . "|\n";
    echo "|$string1| <strong> -> str_replace() -></strong>  |" . str_replace("_", " ",$string2) . "|\n";
    echo "|$string1| <strong> -> strrev() -></strong>  |" . strrev($string1) . "|\n";
    echo "|$string1| <strong> -> str_suffle() -></strong>  |" . str_shuffle($string1) . "|\n";
    echo "|$string1; \"Short string\"| <strong> -> strcmp() -></strong>  |" . strcmp($string1, "Short string.") . "|\n";
    echo "|$string1; \"string\" | <strong> -> strpos() -></strong>  |" . strpos($string1, "string") . "|\n";
    echo "|$string1| <strong> -> explode(\" \", \$string1) -></strong>" . "\n";
    $stringArray = explode(" ",$string1);
    
    foreach($stringArray as $word) {
        echo $word. "\n";
    }

    echo "\n \n \n";
    echo "<h3><b>Starting strings:</b></h3>";
    echo "\$string1 = " .$string2 . "\n";
    echo "\$string2 = " .$string1;
    

    echo "</pre>";

?>