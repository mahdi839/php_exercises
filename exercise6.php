<?php 
// PROBLEM DESCRIPTION --------------------------------


//  Write a PHP script which decodes the following JSON string.
//  Sample JSON code :
//  {"Title": "The Cuckoos Calling",
//  "Author": "Robert Galbraith",
//  "Detail": {
//  "Publisher": "Little Brown"
//  }}
//  Expected Output :
//  Title : The Cuckoos Calling
//  Author : Robert Galbraith
//  Publisher : Little Brown



// -------------------


// SOLUTION --------------------------------

function myFunction ($key, $value) {
    echo " $value :  $key" . "<br>";
}
$obj = '{"Title": "The Cuckoos Calling",
     "Author": "Robert Galbraith",
     "Detail": {
     "Publisher": "Little Brown"
     }}';

$jsonValue = json_decode($obj,true) ;


array_walk_recursive($jsonValue, 'myFunction');
