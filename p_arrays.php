<?php

 $array1 = [1, 2, 3, 4, 5];
echo "<h3>array1-values </h3><br>";
 echo $array1[0];
 echo $array1[1];
 echo $array1[2];
 echo $array1[3];
 echo $array1[4];
echo "<br><hr>";
echo "<h3>foreach() - iterrating troughout the array</h2> <br>";
 foreach($array1 as $element) 
    echo  "{$element} <br>";
echo "<br><hr>";
echo "<h3>array_push() - adding new element at the end of the array</h3> <br>";
array_push($array1, 6);
foreach($array1 as $element) 
    echo  "{$element} <br>";
echo "<br><hr>";

echo "<h3>Printing the array using the <i>for</i> loop</h3> <br>";
for($i =0; $i< count($array1); $i++)
    echo $array1[$i];

echo "<br><hr>";
echo "<h3>array_pop()</h2> <br>";
array_pop($array1);

for($i =0; $i<3; $i++)
    echo $array1[$i];


echo "<br><hr>";
echo "<h3>array_shift()</h2> <br>";
array_shift($array1);
for($i =0; $i<2; $i++)
    echo $array1[$i];

echo "<br><hr>";
echo "<h3>associative arrays</h2> <br>";

$capitals = [
    "Srbija" => "Beograd",
    "Italy" => "Rome",
    "Greece" => "Athens"
];

foreach($capitals as $key)
    echo $key . "<br>";

 echo "<br>";
foreach($capitals as $key => $value)
    echo "{$key} | {$value} <br>";

$keys = array_keys($capitals);
$values = array_values($capitals);

echo "<br> Countries(keys):<br>";
foreach($keys as $key) 
    echo "$key" . "<br>";
?>