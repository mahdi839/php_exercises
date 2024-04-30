<?php 
// problem description------------------

// 2. $color = array('white', 'green', 'red'')
// Write a PHP script which will display the colors in the following way :
// Output :
// white, green, red,

// green
// red
// white


// solution ---------------------------
$colors = array('white', 'green', 'red');

  foreach($colors as $color){
   echo "<li>". $color ."</li>" ."<br>"; 
}  