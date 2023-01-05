<?php 
echo "<br>";
echo ("//////////////////  TASK1  /////////////////////////////////");
echo "<br>";
$color=['red','green','white'];


print_r("The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon");


?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("/////////////////////   TASK2    //////////////////////////////");
echo "<br>";
echo "<br>";
$color=['red','green','white'];

echo
 "
<ul>
   <li>
   $color[0]
   </li>
 
   <li>
   $color[1]
   </li>

   <li>
   $color[2]
   </li>
</ul>
";

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("//////////////////////// TASK3  ///////////////////////////");
echo "<br>";

// }
$cities = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid");

foreach($cities as $x => $val) {
  echo "The capital of  "." $x = $val<br>";
}
?>


<?php

echo "<br>";
echo "<br>";
echo "<br>";
echo ("//////////////////////////  TASK4  /////////////////////////");
echo "<br>";
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
// echo ($color[4]);
echo  ( current($color));

?>

<?php

echo "<br>";
echo "<br>";
echo "<br>";
echo ("////////////////////  TASK 5  ///////////////////////////////");
echo "<br>";
$original = array( '1','2','3','4','5' );
echo 'Original array : '."<br>";

print_r($original);
// foreach ($original as $x) 
// {echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); echo "<br>";
echo " \n After inserting '$' the array is : "."<br>";
foreach ($original as $x) {
    echo "$x";
}

?>


<?php

echo "<br>";
echo "<br>";
echo "<br>";
echo ("////////////////////  TASK 6 ///////////////////////////////");
echo "<br>";
$fruits = array("a" => "lemon", "b" =>"orange", "c" =>"banana","d" => "apple");
asort($fruits);
print_r($fruits);

// foreach ($fruits as $key => $val) {
//     echo " . $key = " . $val . "<br>";
// }

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("/////////////////////////  TASK 7 //////////////////////////");
echo "<br>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "<br>";
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo "<br>";
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>";

echo "List of five highest temperatures :"."<br>";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}


?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("///////////////////////  TASK 8 ////////////////////////////");
echo "<br>";

$array1=array("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);

print_r (array_merge($array1 ,$array2));

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("////////////////////////// TASK 9 /////////////////////////");
echo "<br>";

$A=array("red","blue","white","yellow");
// flip array key , value
$A=array_flip($A);
// to change case of new key to upper 
$A=array_change_key_case($A,CASE_UPPER);
// to reverse the flip process to origin
$A=array_flip($A);
print_r ($A);


// print_r (array_change_key_case($A,CASE_UPPER));


?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("//////////////////////// TASK 10 ///////////////////////////");
echo "<br>";
$b=array("RED","BLUE","WHITE","YELLOW");
$b=array_flip($b);
$b=array_change_key_case($b,CASE_LOWER);
$b=array_flip($b);
print_r($b);




?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("//////////////////////// TASK 11 ///////////////////////////");
echo "<br>";

for($i=200;$i<=250;$i++)
{
if($i %4==0 )
{
    echo($i." , ");
}
}

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("/////////////////////// TASK 12////////////////////////////");
echo "<br>";
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';


?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("/////////////////////// TASK 13 ////////////////////////////");
echo "<br>";

$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n"

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo ("/////////////////////// TASK 14 ////////////////////////////");
echo "<br>";
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");
?>







