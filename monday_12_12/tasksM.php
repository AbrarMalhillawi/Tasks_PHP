<?php 
session_start();
$a='1000$';
$b=1200;
$c=1400;

$_SESSION['aa']=$a;

echo
"
<table border=1>
     <tr> 
        <td> <font color=blue> Salary of Mr .A is </font></td>   
        <td>$a</td>   

     </tr>
     <tr> 
        <td><font color=blue>Salary of Mr .B is </font> </td>   
        <td>$b$</td>   
     </tr>
     <tr> 
        <td><font color=blue>Salary of Mr .C is </font></td>   
        <td>$c$</td>   
     </tr>
</table>

"





?>

<?php 

// 3-Write a PHP script to count number of lines in a file.
// Note: Store a text file name into a variable and count the number of lines of text it has.


$filePath = "tasksM.php";
$lines = count(file($filePath));
echo "count Number of lines : ".$lines;


?>
<!--  
2-Write a PHP script to get the last modified information of a file. 
Sample filename : php-basfilename:es.php
Sample Output : Last modified Monday, 26th June, 2017, 12:43pm -->

<?php 
echo ("<br>");
echo ("<br>");
echo ("<br>");
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";


?>