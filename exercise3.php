<?php 
// Problem Description-------------

// $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }



// Solution    ------------

$x = array(1, 2, 3, 4, 5);


    array_splice($x,2,1);
    var_dump($x);

