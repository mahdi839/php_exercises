<?php
// PROBLEM DESCRIPTION --------------------------------


//  Write a program which will count the "r" characters in the text "w3resource".





// -------------------


// SOLUTION --------------------------------


$text = "w3resource";
$charecter = "r";
$count = 0;

for($i = 1; $i<=strlen($text); $i++){
    if (substr($text,$i,1)== $charecter){
        $count++;
    }
}
echo $count;
