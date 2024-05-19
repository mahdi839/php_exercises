<?php
// PROBLEM DESCRIPTION --------------------------------


// Create a script to construct the following pattern, using a nested for loop.

// * 
// * * 
// * * * 
// * * * * 
// * * * * * 
// * * * * * 
// * * * * 
// * * * 
// * * 
// *



// -------------------


// SOLUTION --------------------------------
$n =5;
for($i = 1; $i<=$n; $i++){
   
    for($l=1; $l <=$i; $l++){
        echo "*";
        if($l <$i){
            echo " ";
        }
    }
echo "<br>";
}

for ($j=$n; $j>=1; $j--){
     
     for($m=1; $m <= $j; $m++){
        echo " * ";
     }
     echo "<br>";
 }


