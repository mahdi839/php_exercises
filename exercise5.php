<?php 

// PROBLEM DESCRIPTION --------------------------------

// . Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array : 
// 1 2 3 4 5 
// After inserting '$' the array is :
// 1 2 3 $ 4 5





// -------------------


// SOLUTION --------------------------------

$arrValues = array(1,2,3,4);
$inserted = "$";
array_splice($arrValues,3,0, $inserted);
foreach ($arrValues as  $v){
    echo "".$v."" . "<br>";
}
