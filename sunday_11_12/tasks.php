<?php
<<<<<<< HEAD
//  ***************task1*****************

// 1. Write a PHP script to get the PHP version and configuration information.

// phpinfo();


// ****************task2***********************

// 2. Write a PHP script to display the following strings. 
//  Sample String:
// 'Tomorrow I 'll learn PHP global variables.'
// 'This is a bad command: del c:.'
// Expected Output:
// Tomorrow I'll learn PHP global variables.
// This is a bad command: del c:.




echo("Task 2"."<br>");



// echo ("Tomorrow I 'll learn PHP global variables."."<br>");
// echo ("This is a bad command: del c:.");

echo nl2br("
Tomorrow I 'll learn PHP global variables.
This is a bad command: del c:.
");

?>

<!-- ****************task3*************************
3. Create a simple HTML form and accept the user’s name and display the name through a PHP echo statement. -->

<html>
   
<form method="POST">
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
 <?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>

<!-- ***********task4**************************

4. Write a PHP script to get the client's IP address. -->


<?php

echo 'User IP - ' . $_SERVER['REMOTE_ADDR'];



// <!-- ********************task5*****************

// 5. Write a PHP script to get the current file name. -->

$currentPage= $_SERVER['SCRIPT_NAME'];
echo("<br>");
echo $currentPage;
echo("<br>");

?>


<!-- *********task6*********************
6. Write a PHP script, which will return the following components of the URL https://www.w3schools.com/php/default.asp. -->

<?php
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : ' . $url['schem'];
echo("<br>");
echo 'Host : '.$url['host'];
echo("<br>");
echo 'Path : '.$url['path'];
echo("<br>");
?>


<?php


//   ************************task7***************

// 7. Write a PHP script, which changes the color of the first character of a word.
// Sample string: PHP Tutorial.
// Text to replace

$text = "  PHP Tutori al";
// The preg_replace is used here to replace the 
// color of first character of the word
$text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>' , $text);
  
// Display the text value
echo $text;


// ************task8*********

// 8. Write a PHP script to redirect a user to a different page.
//  Expected output: Redirect the user to https://www/. w3schools.com/

echo "<br>"; 

echo '<a href="https://www.w3schools.com/php/default.asp">
<input type="submit" value="w3school"/> 
</a>';
?>


</html>




=======
phpinfo();
echo("hnlhlhly ");
?>
>>>>>>> 697ca6e659772f86929b0178dad6981b465265d8
