<?php 
// PROBLEM DESCRIPTION --------------------------------


//  Write a PHP script to get the largest key in an array.



// -------------------


// SOLUTION --------------------------------

$ceu = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

// solved by the first way

// $maxArray = max(array_keys($ceu));
// echo $maxArray; 

// ------------------------------------------

// solved by the second way

$all_array_key = array_keys($ceu);

$max_key = $all_array_key[0];

foreach($ceu as $key=>$valu){
    if($key>$max_key){
        $max_key = $key;
    }
}
echo $max_key;