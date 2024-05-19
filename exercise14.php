<?php
// Sample array
$myArray = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Initialize variables to hold shortest and longest lengths
$shortestLength = strlen($myArray[0]); // Assume the first string is the shortest initially
$longestLength = strlen($myArray[0]);  // Assume the first string is the longest initially

// Loop through each element of the array
foreach ($myArray as $string) {
    // Compare the length of the current string with the shortest length found so far
    if (strlen($string) < $shortestLength) {
        $shortestLength = strlen($string);
       
        // Update shortest length if current string is shorter
    }
    
    
    // Compare the length of the current string with the longest length found so far
    if (strlen($string) > $longestLength) {
        $longestLength = strlen($string); // Update longest length if current string is longer
    }
}

// Print the result
echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";
?>
