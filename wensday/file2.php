
<?php
echo "<br>"; 
echo "<br>"; 
echo "////// task 1 ////////"; 
echo "<br>"; 


// Write a PHP script to: 

// ⦁	Convert the entered string to uppercase.
// ⦁	Convert the entered string to lowercase.
// ⦁	Make the first letter of the string uppercase.
// ⦁	Make the first letter of each word capitalized




$stringg="abrar Mohammed Hillwai";
echo (strtoupper($stringg)."<br>");
echo strtolower(($stringg)."<br>");
echo ucfirst(($stringg)."<br>");
echo strtolower(($stringg)."<br>");
?>

<?php

echo "<br>"; 
echo "<br>"; 
echo "////// task 2////////"; 
echo "<br>"; 

// Write a PHP script splitting the following numeric string to be a date format.
// Sample Output: '085119'
// Expected Output: 08:51:19


$time_input = strtotime("085119"); 
$date_input = getDate($time_input); 
print_r($date_input);                

?>

<?php

echo "<br>"; 
echo "<br>"; 
echo "////// task 3////////"; 
echo "<br>"; 
// Test whether the string contains the word

$word = "orange";
$myString = "I am a full stack developer at orange coding academy";

if (strpos($myString, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}

 ?>

<?php


?>